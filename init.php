<?php 

    /**
     * Plugin Name: Mobile Bottom Sticky Menu
     */

    //  css files
    function mobile_bottom_menu_styles() {

        wp_enqueue_style( 'mobile-sticky-bottom-menu-stylesheet', PLUGINS_URL( 'css/mobile-sticky-bottom.css', __FILE__ ) );
        wp_enqueue_style( 'mobile-sticky-bottom-menu-responsive', PLUGINS_URL( 'css/responsive.css', __FILE__ ) );

    }
    add_action( 'wp_enqueue_scripts', 'mobile_bottom_menu_styles' );

    function mobile_bottom_menu_func() { ?>

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <section class="sb-mobile-bottom-menu">
            <div class="sb-container">
                <!-- something -->
                <ul>
                    <li><a href="#"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#"><i class="fas fa-home"></i></a></li>
                    <li><a href="#"><i class="fas fa-user-alt"></i></a></li>
                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </section>

    <?php }
    add_action( 'wp_footer', 'mobile_bottom_menu_func' );