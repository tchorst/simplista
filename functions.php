<?php

  register_nav_menus( array(
      'nav-menu' => __( 'Nav Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    ));
 add_theme_support( 'custom-logo', array(
   'height' => 80,
   'width' => 200,
   'flex-height' => true,
  )
 );

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
add_theme_support( 'post-thumbnails' );

add_action( 'widgets_init', 'my_awesome_sidebar' );
function my_awesome_sidebar() {
  $args = array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar-1',
    'description'   => 'The Awesome Sidebar is shown on the left hand side of blog pages in this theme',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );

  register_sidebar( $args );

}