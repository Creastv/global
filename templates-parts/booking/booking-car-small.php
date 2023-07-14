<?php 
$idCar  = intval($_COOKIE['carID']);
$linkToCars = get_field( 'link_do_szukania_pojazdow_' , 'options' );

$titleCar = get_post_field('post_title', $idCar);
$imgFutured = get_field( 'zdjecie', $idCar );
?>

<?php if(!isset($_COOKIE['carID'])) : ?>
<div class="booking-car booking-car--small booking-car--default">
    <?php if( $linkToCars ) : ?>
    <div class="booking-car__wraper">
        <p>Wybierz samochód</p>
        <a class="btn" href="<?php echo $linkToCars; ?>">Znajdź pojazd</a>
    </div>
    <?php endif; ?>
</div>
<?php else: ?>
<div class="booking-car booking-car--small booking-car--default">
    <h2><?php echo $titleCar; ?> </h2>
    <?php echo wp_get_attachment_image( $imgFutured, 'post' ); ?>
</div>
<?php endif; ?>