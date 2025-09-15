<?php
/*
Plugin Name: D3 Word Cloud
Plugin URI: https://github.com/atrus1701/d3-word-cloud-widget
Description: Displays a word cloud of terms using D3.js. Self-contained version without APL dependency.
Version: 1.3.0
Author: Crystal Barton
Author URI: https://www.linkedin.com/in/crystalbarton
GitHub Plugin URI: https://github.com/clas-web/d3-word-cloud-widget
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the base widget class
require_once( __DIR__.'/includes/class-widget-shortcode-control.php' );

// Load the main control class
require_once( __DIR__.'/control.php' );

// Register the widget and shortcode
D3WordCloud_WidgetShortcodeControl::register_widget();
D3WordCloud_WidgetShortcodeControl::register_shortcode();

