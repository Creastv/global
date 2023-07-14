
<?php
$hero = get_field('slider');
if( $hero ):
    echo '<div class="b-slider">';
    echo ' <div class="swiper hero-js">';
    echo ' <div class="swiper-wrapper">';
    foreach( $hero as $item ): 
         echo '<div class="swiper-slide">';
            echo '<div class="slide-wrap" style="background-image: url('.$item['zdjecie'].');">';
            echo '<div class="container">';
              echo '<div class="content">';
              echo '<h1 class="title">' . $item['title']. '</h1>';
              echo '<p>' . $item['opis']. '</p>';
              echo '</div>';
            echo '</div>';
            echo '</div>';
         echo '</div>';
   endforeach; 
    echo ' </div>';
    echo '<div class="swiper-pagination"></div>';
    echo ' </div>';
     get_template_part('templates-parts/header/header', 'extra'); 
    echo ' </div>';
 endif; ?>