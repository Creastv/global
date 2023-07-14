<?php
get_header();
while ( have_posts() ) : the_post();
if(is_singular('post')) :
	get_template_part( 'templates-parts/content/content', 'single' );
elseif(is_singular('pojazdy')) :
	get_template_part( 'templates-parts/car/content-single-car' );
endif;
endwhile;
get_footer();
