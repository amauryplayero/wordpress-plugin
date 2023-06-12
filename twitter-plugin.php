<?php
/*
Plugin Name:  Twit displayer
Plugin URI:   https://www.wpbeginner.com 
Description:  This plugin is a practice plugin to see wassup.  
Version:      1.0
Author:       WPBeginner 
Author URI:   https://www.wpbeginner.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );
