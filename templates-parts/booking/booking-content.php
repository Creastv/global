<?php 
$idCar  = intval($_COOKIE['carID']);
?>
<div class="booking-page">
    <div class="booking-page__content <?php echo $idCar ? " " : "disabled"; ?> ">
        <?php get_template_part( 'templates-parts/booking/booking', 'form' ); ?>
    </div>
    <div class="booking-page__resume <?php echo $idCar ? " " : "disabled"; ?> ">
        <?php get_template_part( 'templates-parts/booking/booking', 'resumen' ); ?>
    </div>
</div>

<?php get_template_part( 'templates-parts/booking/booking-modal-info' ); ?>