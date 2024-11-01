<?php



/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function yourllp_affiliate_section_developers_callback( $args ) {
    // $firstname = "Shortcode";
    global $yourllp_text_domain;
    $plugin_url = plugin_dir_url( __FILE__ );
    require 'templates/lists.php';
}

/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function yourllp_affiliate_settings_init() {
    // Register a new setting for "yourllp_affiliate" page.
    register_setting( 'yourllp_affiliate', 'yourllp_affiliate_options' );
 
    // Register a new section in the "yourllp_affiliate" page.
    add_settings_section(
        'yourllp_affiliate_section_developers',
        __( 'Yourllp Affiliate program settings.', 'yourllp_affiliate' ), 
        'yourllp_affiliate_section_developers_callback',
         'yourllp_affiliate'
    );
       // Register a new field in the "yourllp_affiliate_section_developers" section, inside the "yourllp_affiliate" page.
       add_settings_field(
        'yourllp_affiliate_field_pill', // As of WP 4.6 this value is used only internally.
                                // Use $args' label_for to populate the id inside the callback.
            __( 'Yourllp Affiliate link', 'yourllp_affiliate' ),
        'yourllp_affiliate_field_pill_cb',
        'yourllp_affiliate',
        'yourllp_affiliate_section_developers',
        array(
            'label_for'         => 'yourllp_affiliate_field_pill',
            'class'             => 'yourllp_affiliate_row',
            'yourllp_affiliate_custom_data' => 'custom',
        )
    );
}

function yourllp_affiliate_field_pill_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'yourllp_affiliate_options' );
    // $export =  "anurag";
    global $yourllp_text_domain;
    $plugin_url = plugin_dir_url( __FILE__ );
    $current_link = $options[ 'yourllp_affiliate_field_pill' ] ;
    // $current_link = null; // for testing only.
    if(!$current_link){
      
        $current_link = "https://yourllp.com";
    } 
    require("templates/mypage.php");
}
 
/**
 * Register our yourllp_affiliate_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'yourllp_affiliate_settings_init' );
 

 

 
/**
 * Add the top level menu page.
 */
function yourllp_affiliate_options_page() {
    add_menu_page(
        'Yourllp Affiliates',
        'Yourllp Affiliates',
        'manage_options',
        'yourllp_affiliate',
        'yourllp_affiliate_options_page_html'
    );
}
 
 
/**
 * Register our yourllp_affiliate_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'yourllp_affiliate_options_page' );
 
 
/**
 * Top level menu callback function
 */

function yourllp_affiliate_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url

    // fix it later
    // https://www.php.net/manual/en/function.parse-url.php
    // $msg = 'Just testing';

    // $options = get_option( 'yourllp_affiliate_options' );
    // $current_link = $options[ 'yourllp_affiliate_field_pill' ] ;
    // parsedparse_url($current_link);
    // var_dump(parse_url($current_link));
    // add_settings_error( 'yourllp_affiliate_messages', 'yourllp_affiliate_message', __( $msg , 'yourllp_affiliate' ), 'updated' );



    $msg = 'yourllp affiliate link has been updated.';
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'yourllp_affiliate_messages', 'yourllp_affiliate_message', __( $msg , 'yourllp_affiliate' ), 'updated' );
    }
 
    // show error/update messages
    settings_errors( 'yourllp_affiliate_messages' );
    // global $plugin_url_o;
    // $plugin_url = $plugin_url_o;
    global $yourllp_text_domain;
    // add_option('yourllp_affiliate_new_options', 'hello world!');
    // $options = get_option( 'yourllp_affiliate_new_options' );
    // $options = get_option( 'yourllp_affiliate_options' );
  
    // $options = get_option( 'yourllp_affiliate_options' );
    global $yourllp_text_domain;
    $plugin_url = plugin_dir_url( __FILE__ );
    $title = get_admin_page_title() ; 
    require 'templates/page.php';
}
