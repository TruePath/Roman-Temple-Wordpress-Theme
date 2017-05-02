<?php

function bootstrap_4_sass_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Left Sidebar', 'bootstrap_4_sass' ),
    'id'              => 'left-sidebar',
    'description'     => __( 'The left sidebar widget area', 'roman_temple' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

    register_sidebar( array(
    'name'            => __( 'Right Sidebar', 'bootstrap_4_sass' ),
    'id'              => 'right-sidebar',
    'description'     => __( 'The right sidebar widget area', 'roman_temple' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'bootstrap_4_sass' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'roman_temple' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'bootstrap_4_sass_init' );
