<?php 

    /**
     * Plugin Name: Mobile Bottom Sticky Menu
     */

    //  css files
    function mobile_bottom_menu_styles() {

        wp_enqueue_style( 'sb-main-stylesheet', PLUGINS_URL( 'css/mobile-sticky-bottom.css', __FILE__ ) );
        wp_enqueue_style( 'sb-responsive', PLUGINS_URL( 'css/responsive.css', __FILE__ ) );

        // comment

    }
    add_action( 'wp_enqueue_scripts', 'mobile_bottom_menu_styles' );

    function mobile_bottom_menu_func() { ?>

        <section class="sb-mobile-bottom-menu">
            <div class="sb-container">
                <!-- something -->
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>
        </section>

    <?php }
    add_action( 'wp_footer', 'mobile_bottom_menu_func' );