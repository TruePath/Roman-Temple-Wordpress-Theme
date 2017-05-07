<?php

function b4sass_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Left Sidebar', 'b4sass' ),
    'id'              => 'left-sidebar',
    'description'     => __( 'The left sidebar widget area', 'b4sass' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

    register_sidebar( array(
    'name'            => __( 'Right Sidebar', 'b4sass' ),
    'id'              => 'right-sidebar',
    'description'     => __( 'The right sidebar widget area', 'b4sass' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'b4sass' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'b4sass' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'b4sass_init' );
