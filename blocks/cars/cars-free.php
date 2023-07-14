<?php 
$cars = get_field('wybierz_pojazdy');

$columny = get_field( 'grid' );
$columny = 'kol-' . $columny;

?>
<?php 
if( $cars ):
    if (isset($_COOKIE['resultsDisplay'])) {
    echo '<div  id="ajax-posts" class="cars_wrap--table ">';
    } else {
    echo '<div  id="ajax-posts"  class="cars_wrap--grid ' . $columny .  '">';
    }
        foreach( $cars as $post ): 
            if (isset($_COOKIE['resultsDisplay'])) {
               get_template_part( 'templates-parts/content/content-pojazdy-table' ); 
            } else {
                get_template_part( 'templates-parts/content/content-pojazdy-grid' ); 
            }
        endforeach;
    echo '</div>';
wp_reset_query();
endif; 


