<?php
echo '<div class="cars_wrap--grid">';
while ( have_posts() ) : the_post();
get_template_part( 'templates-parts/content/content-pojazdy', 'grid' ); 
endwhile;
echo '</div>';
?>
