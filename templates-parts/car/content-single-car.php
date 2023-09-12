<?php
$terms = get_the_terms(get_the_ID() , 'Typ' );
$prices = get_field( 'cena', get_the_ID() );
$priceFrom = $prices['miesiac'];
$ofert = $prices['czy_pojazd_jest_objety_promocja'];
$ofertProcent =  $prices['wartosci_promocji']['wysokosc_rabatu_w_%'];
$infoPromo = $prices['info_promocji'];
?>

<article id="post-<?php the_ID(); ?>" class="single-car hentry">
    <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
    <header >
        <div class="h-left">
            <div class="h-left__top">
                <h1 class="entry-title single-post-title">
                <?php the_title(); ?> 
                </h1>
                <?php if(!empty($terms )) : ?>
                    <?php foreach ( $terms as $term ) { ?>
                    <span class="tax-typ"> <?php echo $term->name; ?></span>
                    <?php } ?>
                <?php endif; ?>
                <?php echo $ofert == true ? '<span class="label">Promocja -' . $ofertProcent . '% </span>' : false; ?>
           </div>
            <div class="opinie">
                 <div class="col-lg-12">
                    <?php
                    echo ci_comment_rating_display_average_rating( $post->ID);
                    ?>
                </div>
            </div>
        </div>
        <div class="h-right">
            <a href="#map" class="btn"> <span>Gdzie nas znajdziesz</span></a>
        </div>
    </header>

    <div class="car-details wrap">
          <div class="car-details__left left">
           <?php get_template_part( 'templates-parts/car/gallery' ); ?>
        </div>
         <div class="car-details__right right">
            <?php get_template_part( 'templates-parts/car/info' ); ?>
            <?php get_template_part( 'templates-parts/car/cta' ); ?>
        </div>
    </div>
    <div class="car-info wrap">
        <div class="car-info__left left">
           <?php get_template_part( 'templates-parts/car/futured' ); ?>
           <?php get_template_part( 'templates-parts/car/content' ); ?>
        </div>
         <div class="car-info__right right">
            <?php get_template_part( 'templates-parts/car/comments' ); ?>
            <div class="sticky">
             <?php get_template_part( 'templates-parts/car/cta' ); ?>
            </div>
        </div>
    </div>
    <div class="car-suggested">
        <?php get_template_part( 'templates-parts/car/suggested' ); ?>
    </div>
    <div id="map" class="map">
        <?php get_template_part( 'templates-parts/car/map' ); ?>
    </div>
</article>
