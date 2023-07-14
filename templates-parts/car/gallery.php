<?php
$imgFutured = get_field( 'zdjecie', get_the_ID() );
$gallery = get_field( 'galeria_zdjec', get_the_ID() );
?>
<div class="car-gallery">
    <div class="car-gallery__wrap">
       <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php  echo wp_get_attachment_image( $imgFutured, 'thumbnails' ); ?>
            </div>
            <?php if($gallery) : ?>
            <?php foreach($gallery as $item) : ?>
            <div class="swiper-slide">
              <?php  echo wp_get_attachment_image( $item, 'thumbnails' ); ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        </div>
        <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="img-wrap">
                <?php  echo wp_get_attachment_image( $imgFutured, 'full' ); ?>
                
                </div>
            </div>
             <?php foreach($gallery as $item) : ?>
            <div class="swiper-slide">
            <div class="img-wrap">
                <a data-fancybox="gallery" href="<?php  echo wp_get_attachment_image_url( $item, 'full' ); ?>">
                <?php  echo wp_get_attachment_image( $item, 'full' ); ?>
                </a>
             </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>