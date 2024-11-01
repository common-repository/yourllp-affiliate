<?php


function yourllp_affiliate_get_shortcode( $image) {
    // $image = "image1.png";
    $plugin_url = plugin_dir_url( __FILE__ );
    $o = '<div>';
    // $o .= '<h2 id="box">' . esc_html("asdfasd") . '</h2>';
    $options = get_option( 'yourllp_affiliate_options' );
    $current_link = $options[ 'yourllp_affiliate_field_pill' ] ;
    $affiliate_link = $current_link;
    $o .= '<a href="' . esc_html($affiliate_link) . '"><img style="width:100%;" src="' . esc_html($plugin_url . "images/" . $image) . '"></a>';
    $o .= '</div>';
    return $o;
}
 


function yourllp_affiliate_image_1_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image1.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_2_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image2.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_3_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image3.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_4_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image4.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_5_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image5.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_6_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image6.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_7_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image7.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_8_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image8.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_9_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image9.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_10_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image10.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

function yourllp_affiliate_image_11_shortcode( $atts = [], $content = null, $tag = '' ) {
    $image = "image11.png";
    $o = yourllp_affiliate_get_shortcode($image);
    return $o;
}
 

