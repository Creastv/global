<?php 
$idCar  = intval($_COOKIE['carID']);
$linkToCars = get_field( 'link_do_szukania_pojazdow_', 'options');
?>
<?php if(!isset($_COOKIE['carID'])) : ?>
<div class="h-extra__car">
    <div class="container">
        <div class="row">
            <div class="booking-car booking-car--large booking-car--default">
                <?php if( $linkToCars ) : ?>
                <div class="booking-car__wraper">
                    <p>Wybierz samochód który Cię interesuje.</p>
                      <a class="btn" href="<?php echo $linkToCars; ?>">Znajdź pojazd</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php else : ?>
<div class="h-extra__car">
    <div class="container">
        <div class="row">
            <div class="booking-car booking-car--large booking-car--set">
                <?php get_template_part( 'templates-parts/booking/booking-car-large-content' ); ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>