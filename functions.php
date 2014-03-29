<?php
/**
 *
 * desc: weby is a wordpress theme made for drinkentrepreneurs.org
 * author: antoine.angot@gmail.com
 * date: 6 Jul 2013
 *
 **/

if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'Newsletter Widget Area'),
   'id' => 'newsletterwidgetarea',
   'description' => __( 'An optional widget area for your site newsletter', 'ahah' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );

if ( ! isset( $content_width ) )
        $content_width = 584;

add_action( 'after_setup_theme', 'wedy_setup' );

if ( ! function_exists( 'wedy_setup' ) ):
function wedy_setup() {

   register_nav_menu( 'primary', __( 'mainMenu', 'wedy' ) );
}
endif;
// setup
?>
