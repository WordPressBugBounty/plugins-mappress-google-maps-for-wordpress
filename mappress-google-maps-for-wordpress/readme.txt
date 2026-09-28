=== MapPress – Google Maps, OpenStreetMap & Leaflet ===
Contributors: chrisvrichardson
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4339298
Tags: maps, google maps, leaflet, openstreetmap, mapbox
Requires at least: 6.3
Tested up to: 7.1
Requires PHP: 7.0
Stable tag: 2.97.13
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Unlimited maps and markers. Free, no API key, no setup. Google Maps, Leaflet, OpenStreetMap & Mapbox. Map editor, blocks and store locators.

== Description ==
MapPress is the easiest way to add beautiful interactive maps to WordPress, with Gutenberg map blocks and classic editor support.

Create unlimited maps and markers in the free version, with no upgrade required. MapPress works the moment you activate it: no API key, no billing account, no configuration.

Pick the map service that fits you: Google Maps, or free keyless Leaflet maps using OpenFreeMap (OpenStreetMap data) — no API key required. Mapbox is also supported.

Perfect for contact pages, store and office locations, real estate listings, travel routes, delivery areas and directories.

Upgrade to [MapPress Pro](https://mappresspro.com/mappress) for even more features, including custom icons (with a built-in icon editor!), search and filter, mashups, and much more.  See it in action on the [MapPress Home Page](https://mappresspro.com/mappress) or test it yourself with a [Free Demo Site](https://mappresspro.com/demo)!

[Home Page](https://mappresspro.com/mappress)
[What's New](https://mappresspro.com/whats-new)
[Documentation](https://mappresspro.com/mappress-documentation)
[FAQ](https://mappresspro.com/mappress-faq)
[Support](https://mappresspro.com/forums)

= Key Features =
* Unlimited maps and markers in free version
* No API key, no setup and no fees
* Google Maps, Leaflet, Mapbox, and free OpenFreeMap maps (using OpenStreetMap data)
* Gutenberg editor map blocks
* Classic editor support
* Styled maps
* Marker clustering
* Add maps to any post, page or custom post type
* Responsive maps
* Size maps by pixels, percent or viewport
* Popups with custom text, photos, images, and links
* Google overlays for traffic, bicycling and transit
* Directions from Google Maps
* Geocoders from Google, Nominatim, and Mapbox
* KML map overlays
* GPX tracks
* Draw polygons, circles, and lines
* Generate maps using PHP
* WPML compatible
* MultiSite compatible

= Pro Version Features =
* Get [MapPress Pro](https://mappresspro.com/mappress) for additional functionality
* Build a searchable map or store locator with search, geolocation and filtering
* Custom markers upload
* Marker editor with thousands of icons, shapes and colors
* Gutenberg "mashup" block for searchable maps and store locators
* Map widget and mashup widget
* Customizable templates for markers and lists
* Generate maps automatically from custom fields
* Automatically assign marker icons by taxonomy, tag, or category
* Advanced Custom Fields (ACF) integration

= Localization =
Please [Contact me](https://mappresspro.com/contact) to provide a translation.  Many thanks to all the folks who have created and updated translations.

== Installation ==
1. Install and activate the plugin through the 'Plugins' menu in WordPress
1. You should now see a MapPress meta box in the 'edit posts' screen

See full [installation instructions and Documentation](https://mappresspro.com/mappress-documentation).

Updating is automatic.  Your maps are stored in the database, so they are preserved across updates.

== Frequently Asked Questions ==

= Is the free version limited? =
No. The free version allows unlimited maps and markers — no cap, and no upgrade required. Pro adds more features, but it doesn't raise any limit, because there isn't one.

= Do I need a Google Maps API key? =
No. MapPress includes free Leaflet maps using OpenFreeMap, which serves OpenStreetMap data and needs no API key. A key is only required if you choose the Google Maps or Mapbox engines. You can switch engines at any time without losing your maps.

= Which map engine should I choose? =
Leaflet maps using OpenFreeMap need no API key or billing setup, or choose Google Maps (which require an API key). Your maps are stored independently of the engine, so you can switch at any time without losing data.

= Does MapPress work with the block editor, classic editor and page builders? =
Yes.  MapPress includes a Gutenberg map block and full classic editor support, and you can place maps anywhere using a shortcode or directly in PHP.

= Does MapPress set cookies or track visitors? =
The free Leaflet maps using OpenFreeMap set no cookies and do not track your visitors, so they require no cookie consent.  Google Maps and Mapbox may track users, but if you use the Complianz consent plugin, MapPress integrates with it automatically to block those services until a visitor consents.

= Does MapPress work with caching plugins? =
Yes.  If a map stops loading after enabling aggressive JavaScript optimization, exclude the MapPress scripts from minification or deferral.

= Does MapPress support WPML and multilingual sites? =
Yes.  MapPress is WPML compatible, including translation of map and marker content.

= How do I report a security issue? =
Please [contact us](https://mappresspro.com/contact).  We respond promptly and credit reporters in the changelog.

= Where can I find documentation and support? =
[Documentation](https://mappresspro.com/mappress-documentation)
[FAQ](https://mappresspro.com/mappress-faq)
[Support](https://mappresspro.com/forums)

== Screenshots ==
1. MapPress settings page
2. Map Library in Gutenberg
3. Creating a map
4. Creating a mashup

== Changelog ==

= 2.97.13 =
* Fixed: prevent other plugins from displaying notice dismissal code

= 2.97.12 =
* Fixed: bug causing settings page reload
* Fixed: mashup block queries not updating properly

= 2.97.11 =
* Changed: multiple compatibility updates for the WP 7.1 iframed editor
* Changed: you can now choose which post types display a 'map' colum independently from the geocoding settings
* Changed: minimum WP version is now 6.3
* Fixed: sidebar preview for poi list and filters was not working in Gutenberg editor

= 2.97.10 =
* Changed: better labeling of the search box for the map editor 
* Fixed: Google removed the drawing manager, breaking MapPress functionality

= 2.97.9 =
* Changed: better handling for 'excerpt_more' filters for mashup POIs
* Changed: improvements to the Pro updater, to prevent accidentally overwriting Pro with free version
* Changed: POI 'more' links now open outside iframe for iframed maps

= 2.97.8 =
* Added: improve terms fetching for mashup block, applies to sites with large numbers of taxonomies and hosts limiting connections
* Added: map-level POI list toggle
* Changed: update icon sizing to work with newer Leaflet stylesheet
* Fixed: mashup block lines/search buttons weren't responding


= 2.97.7 =
* Added: dark theme for OFM maps
* Changed: improved reminders
* Changed: better tile service setup
* Changed: better prevention for Siteground Optimizer minification problems
* Fixed: 'search' and 'filter' buttons were not working for Gutenberg mashup block
* Fixed: mashup block taxonomies were read with 'edit' context, should be 'view'
* Fixed: prevent reading draft/deleted posts in popups
* Fixed: try to implement workaround for hosts limiting connections, which intermittently prevents taxonomy reads

= 2.97.6 =
* Added: check that webGL is active
* Added: prevent optimizers like Siteground from re-minifying mablibre

= 2.97.5 =
* Changed: limit query and filter nonce check for sites with caching plugins

= 2.97.4 = 
* Added: escape in iframe

= 2.97.3 = 
* Fixed: change in 2.97 caused mashup shortcodes to show all posts
* Changed: improved hierarchical taxonomy handling in filters

= 2.97.2 = 
* Fixed: invalid Nominatim geocoder with Google engine
* Fixed: wp-cli error prevented translation file generation
* Thanks to https://shovon.bd for security assistance in 2.97

= 2.97.1 =
* Bump version

= 2.97 =
* Added: compatibility with WP7
* Changed: required minimum version is now WordPress 6.2
* Changed: maplibre scripts are now bundled with plugin 
* Changed: more restrictive permissions for API calls
* Fixed: changes to support pooled SQL connections
* Fixed: add missing ob_start

= 2.96.6 = 
* Fixed: better compatibility with Complianz when using ofm

= 2.96.5 =
* Fixed: improved click/drag handling inside Gutenberg editor's new content iframe 

= 2.96.4 =
* Fixed: clicking on map not closing popup with openfreemap
* Fixed: latest Leaflet defaults autoPanOnFocus true

= 2.96.3 =
* Fixed: error with filter for empty taxonomy (with no terms)

= 2.96.2 =
* Fixed: version error

= 2.96 = 
* Added: OpenFreeMap (OFM) GL maps, a better looking default instead of OpenStreetMaps (OSM) raster tiles
* Added: for mashups, empty filters now default to only the 'include' terms or post types
* Added: dropdown slug search for filters
* Changed: new styled maps component, including support for OFM
* Fixed: selecting specific post types was not possible in post types filter
* Fixed: resetting post types filter uses only default post types

= 2.95.12 =
* Changed: save options when tileservice changes
* Changed: allow 'lon' as synonym for 'lng' when importing
* Fixed: 'post types' filter not displaying checkboxes correctly
* Fixed: try to give better errors on import invalid JSON

= 2.95.11 =
* Fixed: fatal error in wpml module

= 2.95.10 =
* Fixed: template editor not saving properly

= 2.95.9 = 
* Fixed: lines attribute not saving in Gutenberg block
* Fixed: string saving with WPML

= 2.95.8 =
* Fixed: error in filters dropdown from 2.95.7

= 2.95.7 =
* Added: travel lines can now be toggled on/off in the map editor
* Added: Google Material Symbols font for icon editor
* Added: new WPML integration to allow map POI translation 
* Changed: remove top margin from 'directions' wrapper div
* Fixed: error when displaying filters but custom CSS has hidden the header
* Fixed: scrollbars not restored closing icon editor with escape key

= 2.95.6 = 
* Added: new setting for 'directions' text for easier change/translation
* Fixed: error when creating new Mapbox style
* Fixed: Nominatim geocoder was not honoring lat, lng entry
* Fixed: default google directions to https
* Changed: removed google directions server URL setting 
* Changed: adjustments to POI list CSS for padding

= 2.95.5 =
* Changed: improved merging of queries when using ACF location fields
* Fixed: Google drawing manager displayed twice on the map
* Fixed: better error highlighting in settings page
* Fixed: updated importer to treat input/radio/select fields as strings, checkboxes as arrays
* Fixed: additional bug fixes for template handling

= 2.95.4 =
* Added: better error handling for empty/missing template files
* Changed: move 'mapp_filters_get' query parameter to build version
* Fixed: scrollbars not restored after dialog box is closed

= 2.95.3 = 
* Added: JS event on map ready.  See documentation for details.
* Changed: 'mapp_filters_get' updated to include map query as parameter

= 2.95.2 =
* Added: support Places API (New) to stop Google warnings.  If you would like to use this API, enable it in the cloud console.

= 2.95.1 =
* Fixed: single-map filters not working

= 2.95 =
* Added: corrected line colors in Leaflet KMLs
* Added: mashup filter checkboxes now default from initial query values
* Added: filter 'mappress_filter_values'

== Upgrade Notice ==     

= 2.97.10 =
Google removed the map drawing tools from their API. This update restores them. If your maps stopped displaying or you couldn't add markers or shapes in the editor, please update.                        