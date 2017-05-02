<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">
  <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo home_url('/'); ?>">Navbar
<!--     <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="30" height="30" alt="">
 -->  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
          wp_nav_menu( array(
          'menu'              => 'navbar',
          'theme_location'    => 'navbar',
          'depth'             => 2,
          'container'         => '',
          'container_class'   => '',
          'container_id'      => '',
          'menu_class'        => 'navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
      );
    //   wp_nav_menu( array(
    //     'theme_location'		=> 'navbar',
    //     'container'         => false,
    //     'menu_class'				=> '',
    //     'fallback_cb'				=> '__return_false',
    //   	'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
    //     'depth'							=> 2,
				// 'walker'            => new b4st_walker_nav_menu()
    //   ) );
    ?>
      </div>
		<?php get_template_part('navbar-search'); ?>
</nav>


<div id="site-container" class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h1 id="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php $header_image = get_header_image(); ?>
          <img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
      </a>
      </h1>
      <?php $site_description = get_bloginfo( 'description' );
      if ( ! empty( $site_description ) ) : ?>
      <h6 id="site-description">
        <?php print($site_description) ?>
      </h6>
      <?php endif; ?>
    </div>
  </div>
</div>

