<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    
    <div class="col-md-2 hidden-sm-down" id="left-sidebar" role="navigation">
       <?php get_sidebar('left'); ?>
    </div>
    
      <div id="content" class="col-12 col-md-7" role="main">
          <?php get_template_part('loops/content', 'page'); ?>
      </div><!-- /#content -->
    
    <div class="col-6 col-md-3" id="right-sidebar" role="navigation">
       <?php get_sidebar('right'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>