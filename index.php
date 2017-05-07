<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">

    <div class="col-lg-2" id="left-sidebar" role="navigation">
       <?php get_sidebar('left'); ?>
    </div>
    
      <div id="content" class="col-lg-7" role="main">
          <?php get_template_part('loops/content', get_post_format()); ?>
      </div><!-- /#content -->
    
    <div class="col-lg-3" id="right-sidebar" role="navigation">
       <?php get_sidebar('right'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>