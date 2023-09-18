=== Post Carousel with Reading Time ===
Contributor: Alireza Nikpour
Tags: carousel, reading time, posts
Requires at least: 4.0
Tested up to: 5.8
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

This plugin allows you to display posts in a carousel format with estimated reading times. It demonstrates my skills in WordPress development, PHP, and CSS.

Key Technical Features:

- **Custom Query**: The plugin utilizes the `WP_Query` class to fetch and display posts.

- **Shortcode Implementation**: The carousel is embedded in posts or pages using the `[post_carousel_with_reading_time]` shortcode.

- **Responsive Design**: CSS Flexbox is used to create a responsive and dynamic carousel layout.

- **Reading Time Calculation**: Reading time is calculated based on the word count of post content.

- **Enqueueing Styles**: The `wp_enqueue_style` function is employed to enqueue custom styles for the plugin.

- **HTML Output**: PHP is used to generate the HTML structure of the carousel.

- **Plugin Initialization**: The plugin is initialized using the `add_action` and `add_shortcode` functions.

== Installation ==

1. Upload the `post-carousel-with-reading-time` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Usage ==

To display the post carousel, simply use the `[post_carousel_with_reading_time]` shortcode in any post or page.

Example shortcode:

[post_carousel_with_reading_time]


To customize the plugin's styles, modify the `style.css` file located in the plugin's folder.

== Technical Overview ==

- **Enqueue Custom Styles**: Custom styles are enqueued using the `wp_enqueue_style` function. Styles are defined in the `style.css` file.

- **Reading Time Calculation**: The `calculate_reading_time` function calculates reading time based on word count in post content.

- **Responsive Design**: The `.carousel-container` and `.carousel-item` classes use CSS Flexbox to create a responsive layout.

- **HTML Structure**: The `post_carousel_with_reading_time_shortcode` function generates the HTML structure of the carousel.

- **Custom Query**: The plugin uses `WP_Query` to retrieve posts, with custom arguments defined in the `$args` array.

- **Plugin Initialization**: The plugin is initialized using `add_action` and `add_shortcode` functions in the `functions.php` file.

== Screenshots ==

1. Carousel on a webpage.

== Changelog ==

= 1.0 =
* Initial release.

== Support ==

For technical support or inquiries, please contact Alireza Nikpour (alirezanikpourstan@gmail.com).

