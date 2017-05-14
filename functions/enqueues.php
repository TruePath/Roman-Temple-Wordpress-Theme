<?php

function b4sass_enqueues() {

	/* Scripts */
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1', true);

	 wp_deregister_script('jquery-migrate');
    // Register
    wp_register_script('jquery-migrate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js', array('jquery'), '3.0.0', true); // require jquery, as loaded above
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-migrate' );
	// wp_deregister_script('jquery-ui');

	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

 //  	wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
	// wp_enqueue_script('modernizr');

	wp_register_script('tether',  'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4.0', true);
	wp_enqueue_script('tether');

	// wp_register_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), '4.0.0-alpha.6', false);
  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/javascripts/bootstrap.min.js', array('jquery'), '4.0.0-alpha.6', true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('b4st-js', get_template_directory_uri() . '/javascripts/b4st.js', false, null, true);
	wp_enqueue_script('b4st-js');

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	 wp_register_script('mathjax', 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML', false, '2.7.1', true);
	wp_enqueue_script('mathjax');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'b4sass_enqueues', 100);
