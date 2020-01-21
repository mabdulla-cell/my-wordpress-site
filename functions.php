<?php
/*
* Theme Function File
*/
function quickcloud_theme_setup(){

	add_theme_support('custom-logo');

	add_theme_support('title-tag');

	add_theme_support( 'post-thumbnails' );

	add_image_size('home-featured',600,400,array('center','center'));

	add_image_size('home-about',500,300,array('center','center'));

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);

	register_nav_menus( array(
		'primary' => __( 'Primary Menus', quickCloud)
	));
};

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

add_action('after_setup_theme','quickcloud_theme_setup');

function load_stylesheets()
{

 wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
  wp_enqueue_style('bootstrap');

	wp_enqueue_style('quickCloud', get_stylesheet_uri());

wp_enqueue_script('quickcloud-custom', get_template_directory_uri() .'/js/custom.js', array('jquery'), '20150825', true);

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_all_js()
{
wp_register_script('quickcloud-all', get_template_directory_uri() .'/js/all.js','',1,'true');
wp_enqueue_script('quickcloud-all');
}
add_action('wp_enqueue_scripts','load_all_js');


function load_timeline_js()
{
wp_register_script('quickcloud-timeline', get_template_directory_uri() .'/js/timeline.min.js','',1,'true');
wp_enqueue_script('quickcloud-timeline');
}
add_action('wp_enqueue_scripts','load_timeline_js');

function quickCloud_widgets_init(){
	register_sidebar(array(
		'name'			=>__('Footer Widget 1', 'QuickCloud'),
		'id'			=>'footer-1',
		'description'	=>'footer 1',
		'before_widget'	=>'<aside id="%1$s class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<div class="widget clearfix">
                        <div class="widget-title"><h3>',
		'after_title'	=>'</h3></div>',
	));
	register_sidebar(array(
		'name'			=>__('Footer Widget 2', 'quickCloud'),
		'id'			=>'footer-2',
		'description'	=>'footer 2',
		'before_widget'	=>'<aside id="%1$s class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<div class="widget clearfix">
                        <div class="widget-title"><h3>',
		'after_title'	=>'</h3></div>',
	));
	register_sidebar(array(
		'name'			=>__('Footer Widget 3', 'quickCloud'),
		'id'			=>'footer-3',
		'description'	=>'footer 3',
		'before_widget'	=>'<aside id="%1$s class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<div class="widget clearfix">
                        <div class="widget-title"><h3>',
		'after_title'	=>'</h3></div>',
	));
}

add_action('widgets_init','quickCloud_widgets_init');

//cutom post types
require get_template_directory().'/inc/about.php';


function prefix_do_wampum_popups() {

	// Show this popup on posts
	if ( is_singular('post') ) {
		$content = '<p>My Pop Up</p>';
		$args	 = array(
			'cookieName' => 'prefix_posts_popup_viewed',
			'type'		 => 'exit',
			'style'		 => 'modal',
		);
		wampum_popup( $content, $args );
	}

	// Show this popup on pages
	if ( is_singular('page') ) {
		$content = '<p>My Pop Up</p>';
		$args	 = array(
			'cookieName' => 'prefix_pages_popup_viewed',
			'type'		 => 'timed',
			'style'		 => 'slideup',
		);
		wampum_popup( $content, $args );
	}

}
add_action( 'wampum_popups', 'prefix_do_wampum_popups' );

?>