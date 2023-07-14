<?php
/**
 * Template Name: Page with reservation form
 *
 */
get_header();

while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" >
    <?php get_template_part( 'templates-parts/booking/booking-content' ); ?>
</article>
<?php endwhile;
get_footer();