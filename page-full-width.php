<?php
/**
 * Template Name: Full Width
 *
 */
get_header();

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry">
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
<?php endwhile;
get_footer();
