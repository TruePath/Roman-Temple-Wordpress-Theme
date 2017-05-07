<?php

function b4sass_setup() {
	add_editor_style('editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 970);
}
add_action('init', 'b4sass_setup');

/*
Register Navbar
*/

register_nav_menu('navbar', __('Navbar', 'b4sass'));

// if (! isset($content_width))
// 	$content_width = 600;

function b4sass_excerpt_readmore() {
	return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Read more', 'b4st') . ' <i class="fa fa-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'b4sass_excerpt_readmore');

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

$args = array(
	'flex-width'    => true,
	'width'         => 799,
	'flex-height'    => true,
	'height'        => 146,
	'default-image' => get_template_directory_uri() . '/img/header.png',
);
add_theme_support( 'custom-header', $args );

$defaults = array(
    'default-image' => get_template_directory_uri() . '/img/background.jpg',
    'default-preset' => 'default',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-repeat' => 'repeat',
    'default-attachment' => 'scroll',
    'default-color' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $defaults );

// add_theme_support( 'custom-logo', array(
// 	'height'      => 64,
// 	'width'       => 64,
// 	'flex-height' => true,
// 	'flex-width'  => true,
// 	'default-image' => get_template_directory_uri() . '/img/icon.svg',
// 	'header-text' => array( 'site-title', 'site-description' ),
// ) );

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

add_action( 'after_setup_theme', 'b4sass_after_setup' );
function b4sass_after_setup(){
    load_theme_textdomain( 'b4sass', get_template_directory() . '/languages' );
}

function b4sass_render_content() {
	while( have_posts() ) {
    the_post();
    get_template_part( 'content', get_post_format() );
	}
}

add_theme_support( 'infinite-scroll', array(
	'container' => 'content',
    'footer' => 'footer',
    'type'           => 'scroll',
    'footer_widgets' => 'footer-widget-area',
    'container'      => 'content',
    'wrapper'        => true,
    'render'         => 'b4sass_render_content',
    'posts_per_page' => false,
) );