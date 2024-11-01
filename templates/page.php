<div class="wrap">
    <img class="yourllp-affiliate-logo"
        src='<?php esc_html_e( $plugin_url."yourllp/yourllplogo.png", $yourllp_text_domain);?>'>
    <h1 id="title"><?php esc_html_e($title, $yourllp_text_domain)  ?></h1>
    <h3 class="description">
        Bring traffic to yourllp.com and earn 50% commission from the profit on each and every payment made by a student
        for one year(your one year subscription).
        Join our affiliate program and earn a lot of money. No special skills are required. Huge opportunity. Joining is
        free.
    </h3>
    <p class="description"></p>
    <h3>Please visit <a href="https://yourllp.com/affiliateapplication">yourllp.com</a> to get your affiliate link. It's
        free.</h3>

    <form action="options.php" method="post">
        <?php
        settings_fields( $yourllp_text_domain );
        do_settings_sections( $yourllp_text_domain );
        submit_button( 'Save' );
        ?>
    </form>
</div>
<h4 class="description">Just copy the shortcode and paste it anywhere in your wclassgets, posts or pages.
    When someone will click on the image then he/she will go the yourllp.com with your affiliate link and
    you will get 50% commission for each and every payment for one year.
</h4>
<div>
    <table class="yourllp-affiliate-table">
        <tr class="yourllp-affiliate-tr">
            <th class="yourllp-affiliate-th">Shortcodes</th>
            <th class="yourllp-affiliate-th">Images</th>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_1]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image1.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_2]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image2.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_3]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image3.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_4]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image4.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_5]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image5.png", $yourllp_text_domain);?>'></td>
        </tr>

        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_7]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image7.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_8]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image8.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_9]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image9.png", $yourllp_text_domain);?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_10]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image10.png", $yourllp_text_domain)?>'></td>
        </tr>
        <tr class="yourllp-affiliate-tr">
            <td class="yourllp-affiliate-td">[yourllp_affiliate_image_11]</td>
            <td class="yourllp-affiliate-td"><img class="yourllp-affiliate-shortcode-images"
                    src='<?php esc_html_e( $plugin_url."images/image11.png", $yourllp_text_domain)?>'></td>
        </tr>
    </table>
</div>