<?php 
$display_cars = get_field( 'display_cars' );
$sort = get_field( 'sortuj_po' );
$promo = get_field( 'w_promocji' );

if($promo) {
    $checked = true;
} else {
    $checked = false;
}


$type = "all";
$typ = '';
if($sort == 2) :
$type = "Typ";
$typ = get_field( 'typ' );
elseif($sort == 3) :
$type = 'Marki';
$typ = get_field( 'marka' );
elseif($sort == 4) :
$type = 'Modele';
$typ = get_field( 'model' );
endif;

$columny = get_field( 'grid' );
$columny = 'kol-' . $columny;

$postsPerPage = $display_cars;
    $cars = array(
        'post_type' => 'pojazdy',
        'post_status' => 'publish',
        'posts_per_page' => $postsPerPage,
        'tax_query' =>  array (
            array(
                'taxonomy' => $type,
                'terms' => $typ, 
                'field' => 'term_id',
                'operator' => 'IN',
                
            ),
        ), 
    );
    $loop = new WP_Query($cars);  



?>
<?php if($loop->have_posts() ) : 
    if (isset($_COOKIE['resultsDisplay'])) {
    echo '<div  id="ajax-posts" class="cars_wrap--table">';
    } else {
    echo '<div  id="ajax-posts"  class="cars_wrap--grid ' . $columny .  '">';
    }
        while ($loop->have_posts()) : $loop->the_post(); 
        $test = get_field('cena', get_the_ID());  
        if($checked == true ):
            if($test['czy_pojazd_jest_objety_promocja'][0] == 'tak') :
            if (isset($_COOKIE['resultsDisplay'])) {
               get_template_part( 'templates-parts/content/content-pojazdy-table' ); 
            } else {
                get_template_part( 'templates-parts/content/content-pojazdy-grid' ); 
            }
            endif;
        else :
            if (isset($_COOKIE['resultsDisplay'])) {
               get_template_part( 'templates-parts/content/content-pojazdy-table' ); 
            } else {
                get_template_part( 'templates-parts/content/content-pojazdy-grid' ); 
            }
        endif;
            
        endwhile; 
    echo '</div>';
    
    else :
         echo '<h1 class="text-center">Nic nie znaleziono</h1>';
    endif; wp_reset_query(); ?>

