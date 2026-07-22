=== MapPress – Google Maps, OpenStreetMap & Leaflet ===
Contributors: chrisvrichardson
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4339298
Tags: maps, google maps, leaflet, openstreetmap, mapbox
Requires at least: 6.2
Tested up to: 7.0
Requires PHP: 7.0
Stable tag: 2.97.7
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add unlimited Google Maps, Leaflet & OpenStreetMap to WordPress. Create a map, map block or store locator — no API key needed for free maps.

== Description ==
MapPress is the easiest way to add unlimited, beautiful interactive maps to WordPress, with Gutenberg map blocks and classic editor support.

Pick the map service that fits you: **Google Maps**, or free keyless **Leaflet** maps powered by **OpenStreetMap** and **OpenFreeMap** — no API key required. **Mapbox** is also supported.

Create **unlimited maps and markers**.  The popup map editor makes creating and editing maps easy!

Perfect for contact pages, store and office locations, real estate listings, travel routes, delivery areas and directories.

Upgrade to [MapPress Pro](https://mappresspro.com/mappress) for even more features, including custom icons (with a built-in icon editor!), search and filter, clustering, and much more.  See it in action on the [MapPress Home Page](https://mappresspro.com/mappress) or test it yourself with a [Free Demo Site](https://mappresspro.com/demo)!

[Home Page](https://mappresspro.com/mappress)
[What's New](https://mappresspro.com/whats-new)
[Documentation](https://mappresspro.com/mappress-documentation)
[FAQ](https://mappresspro.com/mappress-faq)
[Support](https://mappresspro.com/forums)

= Key Features =
* Unlimited maps and markers
* Google Maps, Leaflet, OpenStreetMap, OpenFreeMap and Mapbox maps
* Free OpenStreetMap and OpenFreeMap maps — no API key needed
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

= Do I need a Google Maps API key? =
No.  MapPress includes free Leaflet maps using OpenStreetMap and OpenFreeMap, which need no API key.  A key is only required if you choose the Google Maps or Mapbox engines.  You can switch engines at any time without losing your maps.

= How many maps and markers can I create? =
As many as you like.  MapPress creates unlimited maps and unlimited markers, even in the free version.

= Which map engine should I choose? =
Choose Google Maps for Google's native maps (requires an API key).  Prefer a free, keyless option?  Leaflet maps using OpenStreetMap or OpenFreeMap need no API key or billing setup.  Mapbox is also supported.  Your maps are stored independently of the engine, so you can switch at any time without losing data.

= Does MapPress work with the block editor, classic editor and page builders? =
Yes.  MapPress includes a Gutenberg map block and full classic editor support, and you can place maps anywhere using a shortcode or directly in PHP.

= Does MapPress set cookies or track visitors? =
The free Leaflet maps using OpenFreeMap and OpenStreetMap set no cookies and do not track your visitors, so they require no cookie consent.  Google Maps and Mapbox may track users; if you use the Complianz consent plugin, MapPress integrates with it automatically to block those services until a visitor consents.

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

= 2.94.15 =
* Fixed: crash when displaying imported poi data input fields

= 2.94.14 =
* Added: settings now allow selecting OSM tiles with Mapbox geocoder

= 2.94.13 =
* Changed: Updated POI title display

= 2.94.12 =
* Try to prevent CORS errors on window search when displaying map in an embedded iframe

= 2.94.11 = 
* Changed: bump version number

= 2.94.10 =
* Fixed: added sanitization to size settings for site admins

= 2.94.9 =
* Changed: wider POI input data fields
* Changed: remove 'show in popups' for POI data fields
* Changed: in mini mode, default to show map on initial load instead of POI list

= 2.94.8 =
* Added: POI data values now support drag & drop
* Fixed: updated sanitization to prevent html encoded content

= 2.94.7 = 
* Changed: updated compatible WP version

= 2.94.6 =
* Fixed: error in last release interfered with mashup queries

= 2.94.5 =
* Fixed: POI titles not working if they contain brackets

= 2.94.4 =
* Fixed: initial POI list open setting affected by mini view

= 2.94.3 =
* Fixed: bug in lat/lng check

= 2.94.2 =
* Fixed: sanitized lat/lng coordinates

= 2.94.1 =
* Fixed: mashups not displaying if no filters available

= 2.94 =
* Added: settings screen now includes default search/filter toggles for maps and mashups
* Added: map editor now allows toggling search & filter for individual maps and mashups

= 2.93 =
* Fixed: escaping for poi data labels

= 2.92.2 =
* Added: warning message about siteground antibot system

= 2.92.1 =
* Changed: clicking anywhere in a POI popup now behaves the same as clicking its marker
* Fixed: JS error from document panel due to changes in WP 6.6 full-site editor 

= 2.91.6 =
* Changed: allow iframe tags in POI body
* Fixed: template "POI data" button was defaulting to custom fields instead of data fields

= 2.91.5 =
* Fixed: filters not displaying properly for single maps
* Fixed: map not panning when opening POI that had been hovered with a tooltip 

= 2.91.4 =
* Fixed: clusters no re-rendering when filtering single map

= 2.91.3 =
* Fixed: popup not opening on KML POIs

= 2.91.2 =
* Fixed: data tab not scrolling when there are many POI data fields

= 2.91.1 =
* Added: text filter can now be separated from the main filters dropdown
* Added: text filter can now search POI title or title+body 
* Changed: rendering is now always via web component
* Changed: removed CSS theme interference fixes, since WP editor requires some of them

= 2.90.6 =
* Fixed: Pro build reverted to free version due to new hosting
* Fixed: magnifying glass icon missing from search box

= 2.90.5 =
* Fixed: map/list toggle buttons not showing on initial load
* Fixed: console warning when multiple maps on same page
* Fixed: travel lines not removed when all POIs are filtered 
* Changed: search button moved inside search box, icon can now be controlled through CSS

= 2.90.4 =
* Added: menu hamburger control is suppressed when street view is active so it doesn't overlay streetview 'back' control
* Changed: switch to OSM if mapbox style is used but mapbox token isn't present
* Fixed: enabled filters for POI data
* Fixed: minimap toggle not working due to error in layout resizeobserver

= 2.90.3 =
* Added: option to suppress KML POIs in POI list
* Added: option to switch between terrain/satellite and regular map (Google only)
* Changed: POI modal dialog now sizes to content instead of filling screen (size can be changed with class .mapp-dialog.mapp-modal)
* Changed: updated directions form and POI swap icon

= 2.90.2 =
* Fixed: warnings in PHP 8.2 when importing
* Fixed: error when downgrading to free version with filters defined

= 2.90.1 = 
* Added: new setting 'filtersOpen' to show filters initially opened
* Added: support for latest site editor 
* Added: support for latest site editor sidebar (when WP implements PluginDocumentSettingPanel for site editor) 
* Changed: filters code refactored
* Fixed: error when changing KML icon
* Fixed: error when using POI connecting lines

== Upgrade Notice ==                             