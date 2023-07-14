<?php 
$po = new WP_Query( array(
        'post_type' => 'pojazdy',
        'posts_per_page' => 4,
		'orderby' => 'rand',
        'order'    => 'ASC'
));
?>
<div class="car-suggested">
	<div class="car-section-title">
	<h3>Inne pojazdy z naszej floty:</h3>
	</div>
	 <?php if($po) { ?>

            <div class="posts-wraper posts-wraper--suggested cars_wrap--grid">
                <?php while ( $po->have_posts() ) : $po->the_post(); ?>
                <?php   get_template_part( 'templates-parts/content/content-pojazdy-grid' );  ?>
                <?php endwhile; wp_reset_query(); ?>
            </div>

    <?php } ?>
</div>
