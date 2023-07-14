<?php

$posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
));
?>
<section id="articles" class="articles--blok">
    <div class="t-section text-center">
        <div class="t-section__wraper">
            <?php if($header['title']) { ?>
            <h2 class="section-title"><?php echo $header['title']; ?></h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                <path id="Shape_3_copy_7" data-name="Shape 3 copy 7" d="M1959.5,4988a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1959.5,4988Z" transform="translate(-1945 -4971)" fill="#575289" />
            </svg>

            <?php } ?>
            <?php if($header['opis']) { ?>
            <p><?php echo $header['opis']; ?></p>
            <?php } ?>
        </div>
    </div>
    <?php if($posts) { ?>
    <div class="container">
        <div class="row">
            <div class="posts-wraper posts-wraper--suggested">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <?php   get_template_part( 'templates-parts/content/content', 'index' );  ?>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
