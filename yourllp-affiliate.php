<?php 
/*
yourllp-affiliate is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
yourllp-affiliate is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with yourllp-affiliate. If not, see {URI to Plugin License}.
*/

/**
 * Plugin Name:       yourllp-affiliate
 * Plugin URI:        https://yourllp.com
 * Description:       yourllp affiliates plugin is the official plugin by yourllp.com.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            yourllp
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       yourllp_affiliate
 * Domain Path:       /languages
 */
// fix it
// Always use the prefix yourllp_affiliate with every function.

$yourllp_text_domain = "yourllp_affiliate";



function yourllp_affiliate_load_stylesheets() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'style', $plugin_url . 'css/style.css' );
}
add_action( 'admin_enqueue_scripts', 'yourllp_affiliate_load_stylesheets' );


require 'shortcode.php';
require 'settings.php';

