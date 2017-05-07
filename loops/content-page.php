<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2 class="page_title"><?php the_title()?></h2>
            <?php if (function_exists('the_subheading')) { the_subheading('<h3 class="page_subheading">', '</h3>'); } ?>
        </header>
        <?php the_content()?>
        <?php wp_link_pages(); ?>
    </article>
<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
