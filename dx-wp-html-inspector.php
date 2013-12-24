<?php
/*
	Plugin Name: DX WP HTML Inspector
	Plugin URI: http://github.com/mpeshev/dx-wp-html-inspector
	Description: A tiny WordPress wrapper for the HTML Inspector library - https://github.com/philipwalton/html-inspector - a HTML code quality tool.
	Author: nofearinc
	Version: 0.1
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Add the script to the wp_head hook.
 * 
 * wp_enqueue_script avoided for simplicity.
 */
add_action( 'wp_head', 'dx_wp_html_inspector' );

function dx_wp_html_inspector() {
?>
	<!--[if gt IE 9]><!-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html-inspector/0.7.0/html-inspector.js"></script>
	<script>HTMLInspector.inspect()</script>
	<!--<![endif]-->
<?php
}