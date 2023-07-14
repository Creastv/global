<?php
get_header();

while ( have_posts() ) : the_post(); ?>
<div class="default-page">
<article id="post-<?php the_ID(); ?>" class="left hentry">
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
<aside>
    <div class="right aside__wraper">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
</div>
<?php endwhile;
get_footer();
