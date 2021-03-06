<?php
if(session_id() == '') session_start();

add_theme_support( 'post-thumbnails' );
/**
 * Scripts
 */
add_action( 'wp_enqueue_scripts', 'futeng_scripts' );

function futeng_scripts() {
		
	//VideoJs
	wp_enqueue_script('videojs', get_template_directory_uri() . '/library/videojs/video.min.js');
	wp_enqueue_style('videojs', get_template_directory_uri() . '/library/videojs/video-js.css');
	
	
	// Swiper
	wp_enqueue_script('swiper', get_template_directory_uri() . '/library/swiper/js/swiper.jquery.min.js', array( 'jquery' ), '3.1.7', false);
	wp_enqueue_style('swiper', get_template_directory_uri() . '/library/swiper/css/swiper.min.css');
	
	// jQuery.ScrollTo
	wp_enqueue_script('jquery.scrollto', get_template_directory_uri() . '/library/jquery.scrollTo.min.js', array( 'jquery' ), '2.1.2', false);
	
	// Dropdown
	wp_enqueue_script('dropdown', get_template_directory_uri() . '/library/horizontalmenu/cbpHorizontalMenu.js', array( 'jquery' ), '3.1.7', false);
	wp_enqueue_style('dropdown', get_template_directory_uri() . '/library/horizontalmenu/component.css');
	
	// Font-Awesome
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/library/fontawesome/css/font-awesome.min.css');
	
	
// 	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
// 		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
// 		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
// 	) );
}