<?php
class Mappress_Poi extends Mappress_Obj {
	var $address,
		$body = '',
		$data,
		$email,
		$iconid,
		$images,
		$kml,
		$log,
		$name,
		$oid,
		$otype,
		$point = array('lat' => 0, 'lng' => 0),
		$poly,
		$props = array(),
		$title = '',
		$type,
		$url,
		$viewport;              // array('sw' => array('lat' => 0, 'lng' => 0), 'ne' => array('lat' => 0, 'lng' => 0))

	function to_html() {
		$vars = (object) array_diff_key(get_object_vars($this), array('body' => ''));
		$vars->point = (isset($this->point)) ? ((object)$this->point)->lat . ',' . ((object)$this->point)->lng : '';  // Point can be object or array
		$vars->viewport = (isset($this->viewport)) ? sprintf("%s,%s,%s,%s", $this->viewport->sw->lat, $this->viewport->sw->lng, $this->viewport->ne->lat, $this->viewport->ne->lng) : '';
		$atts = Mappress::to_atts($vars);
		$body = ($this->body) ? str_replace(array("\r", "\n"), '', $this->body) : $this->body;
		return (($body) ? "\r\n\t<poi $atts>\r\n\t\t$body\r\n\t</poi>" : "\r\n\t<poi $atts></poi>");
	}

	function to_json() {
		return array(
			'address' => $this->address,
			'body' => $this->body,
			'data' => $this->data,
			'iconid' => $this->iconid,
			'images' => $this->images,
			'kml' => $this-> kml,
			'point' => $this->point,
			'poly' => $this->poly,
			'title' => $this->title,
			'type' => $this->type,
			'viewport' => $this->viewport
		);
	}

	function sanitize($saving = false) {     
		if ($saving) {
			// Numerics
			if (isset($this->point)) {
				if (is_array($this->point)) {
					$this->point['lat'] = floatval($this->point['lat']);
					$this->point['lng'] = floatval($this->point['lng']);
				} else if (is_object($this->point)) {
					$this->point->lat = floatval($this->point->lat);
					$this->point->lng = floatval($this->point->lng);
				}
			}
			if (isset($this->viewport)) {
				if (is_array($this->viewport)) {
					$this->viewport['sw']['lat'] = floatval($this->viewport['sw']['lat']);
					$this->viewport['sw']['lng'] = floatval($this->viewport['sw']['lng']);
					$this->viewport['ne']['lat'] = floatval($this->viewport['ne']['lat']);
					$this->viewport['ne']['lng'] = floatval($this->viewport['ne']['lng']);
				} else if (is_object($this->viewport)) {
					$this->viewport->sw->lat = floatval($this->viewport->sw->lat);
					$this->viewport->sw->lng = floatval($this->viewport->sw->lng);
					$this->viewport->ne->lat = floatval($this->viewport->ne->lat);
					$this->viewport->ne->lng = floatval($this->viewport->ne->lng);
				}
			}
			
			if (isset($this->data)) {
				foreach($this->data as $key => $value) {
					if (is_string($value))
						$this->data->$key = sanitize_text_field(html_entity_decode($value, ENT_QUOTES, 'UTF-8'));
				}
			}
			
			// Allow iframes in body
			$allowed_html = wp_kses_allowed_html('post');
			$allowed_html['iframe'] = array('src' => true, 'width' => true, 'height' => true, 'frameborder' => true, 'allow' => true, 'allowfullscreen' => true, 'loading' => true);
			$this->body = ($this->body) ? wp_kses($this->body, $allowed_html) : $this->body;
			
			// Allow anchors in title
			$allowed_html = array('a' => array('href' => true, 'title' => true));
			$this->title = ($this->title) ? wp_kses(html_entity_decode($this->title, ENT_QUOTES, 'UTF-8'), $allowed_html) : $this->title;        
		}
	}
		

	function __construct($atts = '') {
		parent::__construct($atts);
	}

	/**
	* Geocode an address using http
	*
	* @param mixed $auto true = automatically update the poi, false = return raw geocoding results
	* @return true if auto=true and success | WP_Error on failure
	*/
	function geocode() {
		if (!Mappress::$pro)
			return new WP_Error('geocode', 'MapPress Pro required for geocoding');

		// If point has a lat/lng then no geocoding
		$lat = (isset($this->point['lat'])) ? $this->point['lat'] : null;
		$lng = (isset($this->point['lng'])) ? $this->point['lng'] : null;

		if (!empty($lat) && !empty($lng)) {
			// Confirm that lat/lng are numbers
			if (!is_numeric($lat) || !is_numeric($lng))
				return new WP_Error('latlng', sprintf(__('Invalid lat/lng coordinate: %s,%s', 'mappress-google-maps-for-wordpress'), $lat, $lng));
			if (empty($this->address))
				$this->address = "$lat, $lng";
			$this->viewport = null;
		} else {
			$location = Mappress_Geocoder::geocode($this->address);

			if (is_wp_error($location))
				return $location;

			$this->point = array('lat' => $location->lat, 'lng' => $location->lng);
			$this->address = $location->formatted_address;
			$this->viewport = $location->viewport;
		}

		// Guess a default title / body - use address if available or lat, lng if not
		if (empty($this->title) && empty($this->body)) {
			if ($this->address) {
				$parsed = Mappress_Geocoder::parse_address($this->address);
				$this->title = $parsed[0];
				$this->body = (isset($parsed[1])) ? $parsed[1] : "";
			} else {
				$this->title = $this->point['lat'] . ',' . $this->point['lng'];
			}
		}
	}

	/**
	* Fast excerpt for a poi
	*/
	function get_post_excerpt($post) {
		// Fast excerpts: similar to wp_trim_excerpt() in formatting.php, but without (slow) call to get_the_content()
		$raw = ($post->post_excerpt) ? $post->post_excerpt : $post->post_content;
		$text = strip_shortcodes($raw);
		$excerpt_length = 55;
		$excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
		$excerpt = wp_trim_words( $text, $excerpt_length, $excerpt_more );
		return apply_filters('mappress_poi_excerpt', $excerpt, $raw);
	}

	// Update image details, picks up current thumbnail settings and and changed URLs
	function update_images($size = null) {
		if (!$this->images)
			return;

		$force_size = null;

		if (!$size) {
			$force_size = (Mappress::$options->thumbWidth && Mappress::$options->thumbHeight) ? array(Mappress::$options->thumbWidth, Mappress::$options->thumbHeight) : null;
			if ($force_size) {
				$size = $force_size;
			} else if (Mappress::$options->thumbSize) {
				$size = Mappress::$options->thumbSize;
			} else {
				$size = 'thumbnail';
			}
		}

		// Let wp_get_attachment_image_src pick the best-sized image
		foreach($this->images as $i => $image) {
			$image = (object) $image;

			$type = (isset($image->type)) ? $image->type : '';
			switch($type) {
				case 'avatar' :
					$image->html = get_avatar($image->id, '100');
					$this->images[$i] = $image;
					break;

				case 'embed' :
					// Limit embed to selected thumbnail dimensions
					$all_sizes = wp_get_registered_image_subsizes();
					if ($force_size) {
						$dims = array('width' => $force_size[0], 'height' => $force_size[1]);
					} else {
						$sizes = wp_get_registered_image_subsizes();
						$dims = (isset($sizes[$size])) ? $sizes[$size] : null;
					}
					$html = wp_oembed_get($image->url, $dims);
					$image->html = $html;
					$this->images[$i] = $image;
					break;

				case 'image' :
				default :
					// For fixed size, WP will only return a smaller image if the aspect ratio matches exactly, otherwise it returns the original (full size)
					$source = wp_get_attachment_image_src($image->id, $size);
					if ($source)
						$image = (object) array('id' => $image->id, 'url' => $source[0], 'size' => ($force_size) ? array($size[0], $size[1]) : array($source[1], $source[2]));
					else
						unset($this->images[$i]);
					$this->images[$i] = $image;
					break;
			}
		}
	}
}
?>