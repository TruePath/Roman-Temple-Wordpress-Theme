<?php get_header(); ?>

	<div class="container-fluid">
	  <div class="row">

	 <div class="col-lg-2" id="left-sidebar" role="navigation">
       <?php get_sidebar('left'); ?>
    </div>
    
      <div id="content" class="col-lg-7" role="main">

			<header class="page-header">
				<h1>
                    <?php echo sprintf(__('Author %s', 'b4sass'), '<strong>' . get_the_author() . '</strong>'); ?>
				</h1>
			</header><!-- .page-header -->

               <?php get_template_part('loops/content', get_post_format()); ?>
			
		</div>

    <div class="col-lg-3" id="right-sidebar" role="navigation">
       <?php get_sidebar('right'); ?>
    </div>
		
	  </div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
