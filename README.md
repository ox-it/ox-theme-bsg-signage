=== Oxford Blavatnik School of Government wordpress theme ===
Contributors: Guido Klingbeil, Marko Jung
Tags: custom theme, digital signage
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: trunk
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html


== Short Description ==

Custom Wordpress theme to match the corporate identity of the Oxford Blavatnik School of Government (BSG).


== Description ==

This scheme is part of the Oxford Digital Signage system. It defines two sidebars: one to the right and one on the bottom.

In combination with the ox_calendar plugin this theme implements a rudimentary room "blocking" functionality.
Each display such as a monitor in front of a lecture room is assigned a category and displays posts (digital signs)
of theis category. The calendar plugin fills the global variable currentlyOccupied with he locations of currently
ongoing events. If any of the ongoing events matches the category of the display the bottom sidebar displays a message
that the room is currently occupied.

The CSS of this theme supports the My Twitter Widget plugin (wordpress.org/extend/plugins/my-twitter-widget/) by
providing customised CSS code to match the Blavatnik School of Government theme. The indented location to display
twitter feeds is the bottom sidebar. To display twitter feeds, please at the My Twitter widget to the bootom sidebar via
the appearence->widgets configuration page of your Wordpress system.


== Notes ==
This is a minimal theme. If you would like to extend it, or would like us to extend it in later versions, please post feature suggestions in the plugin's [support forum]().

== Installation ==

You can install from within WordPress using the Plugin/Add New feature, or if you wish to manually install:

1. Download the theme,
1. Upload the entire `ox-digital-signage` directory to your themes folder, 
1. Select the theme in your WordPress theme page,
1. Start using it.


== Usage ==


== Screenshots ==

To be done.


== Frequently Asked Questions ==
None yet. We are happy answer any questions to the best of our knowledge though.


= What is the point of this plugin? =

To create a theme mathich the corporate identity of the Oxford Blavatnik School of Government.


== Changelog ==

= 0.0.1 =
* Initial version.

= 0.0.2 =
* Room "blocking" support.
* My Twitter widget CSS support.

= 0.0.3 =
* Bug fix: the location string is no longer allowed to be empty.

== Road Map ==

1. We are looking forward to get your suggestions.


