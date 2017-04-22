<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">

    <div class="col-lg-3" id="sidebar" role="navigation">
       <?php get_sidebar('left'); ?>
    </div>
    
    <div class="col-lg-6">
      <div id="content" role="main">
          <?php get_template_part('loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-lg-3" id="sidebar" role="navigation">
       <?php get_sidebar('right'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>