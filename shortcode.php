<?php

require 'shortcodefunctions.php';
 
/**
 * Central location to create all shortcodes.
 */
function yourllp_affiliate_shortcodes_init() {
    add_shortcode( 'yourllp_affiliate_image_1',  'yourllp_affiliate_image_1_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_2',  'yourllp_affiliate_image_2_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_3',  'yourllp_affiliate_image_3_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_4',  'yourllp_affiliate_image_4_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_5',  'yourllp_affiliate_image_5_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_7',  'yourllp_affiliate_image_7_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_8',  'yourllp_affiliate_image_8_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_9',  'yourllp_affiliate_image_9_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_10', 'yourllp_affiliate_image_10_shortcode' );
    add_shortcode( 'yourllp_affiliate_image_11', 'yourllp_affiliate_image_11_shortcode' );
}
 
add_action( 'init', 'yourllp_affiliate_shortcodes_init' );