<?php

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', get_template_directory_uri() . '/build/css');
define('JS_DIR', get_template_directory_uri() . '/build/js');

if ( ! function_exists( 'mitalent_setup' ) ) :

	function mitalent_setup() {

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mitalent' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mitalent_setup' );


function mitalent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mitalent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mitalent' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mitalent_widgets_init' );

function mitalent_scripts() {
  wp_enqueue_style('main', CSS_DIR . '/main.css');
  wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );
  wp_enqueue_style( 'wp-google-fonts','https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet' );
  wp_enqueue_style( 'wp-google-fonts','https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet' );
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
  wp_enqueue_script('mainscript', JS_DIR . '/main.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'mitalent_scripts' );

require get_template_directory() . '/inc/customizer.php';

function wpforo_search_form( $html ) {
  $html = str_replace( 'placeholder="Search ', 'placeholder=""', $html );
  return $html;
}
add_filter( 'get_search_form', 'wpforo_search_form' );

register_post_type('photo',
  array(
    'labels' => array(
      'name' => __('Photo'),
      'singular_name' => __('Photo'),
      'add_new' => __('Add new'),
      'add_new_item' => __('Add new photo'),
      'edit_item' => __('Edit photo')
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'post-formats'),
    'query_var' => false
  )
);

function getPhoto() {
  $photo = array(
    'numberposts' => 20,
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'photo',
  );

  return get_posts($photo);
}