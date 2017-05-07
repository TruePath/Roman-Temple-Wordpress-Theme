<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h5 class="byline d-flex justify-content-end w-100">
                <span class="author mr-auto"><?php the_author() ?></span>
                <time  class="datetime" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
            </h5>
            <h2 class="post_title"><?php the_title()?></h2>
            <?php if (function_exists('the_subheading')) { the_subheading('<h3 class="subheading">', '</h3>'); } ?>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php _e('Category', 'b4sass'); ?>: <?php the_category(', ') ?><br/>
                <i class="fa fa-comment-o"></i>&nbsp; <?php _e('Comments', 'b4sass'); ?>: <?php comments_popup_link(__('None', 'b4st'), '1', '%'); ?>
            </p>
        </footer>
    </article>
<?php comments_template('/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
