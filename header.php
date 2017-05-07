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


<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" width="45" height="45" alt="<?php echo get_bloginfo( 'title' ); ?>" style="margin: 0; padding:0;"></a>
<button class="navbar-toggler navbar-toggler-left" id="top-navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
		<?php
       wp_nav_menu([
     'menu'              => 'navbar',
     'theme_location'    => 'navbar',
     'container'       => '',
     'container_id'    => '',
     'container_class' => '',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);

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

