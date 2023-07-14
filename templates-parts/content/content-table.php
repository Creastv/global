<?php
echo '<div class="cars_wrap--table">';
while ( have_posts() ) : the_post();
get_template_part( 'templates-parts/content/content-pojazdy', 'table' ); 
endwhile;
echo '</div>';
?>
