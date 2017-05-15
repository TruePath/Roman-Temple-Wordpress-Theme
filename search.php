<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 hidden-sm-down" id="left-sidebar" role="navigation">
       <?php get_sidebar('left'); ?>
    </div>
    
    
    <div id="content" class="col-12 col-md-7" role="main">
      <header class="page-header">
        <h1 class="search_title"><?php _e('Search Results for', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
        <hr/>
      </header>
        <?php get_template_part('loops/content', 'search'); ?>
    </div>
    
    <div class="col-6 col-md-3" id="right-sidebar" role="navigation">
       <?php get_sidebar('right'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<?php get_footer(); ?>