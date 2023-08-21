<?php 
$idCar  = intval($_COOKIE['carID']);
$prices = get_field( 'cena', $idCar );
$kaucja = $prices['kaucja'];

$ofertProcent =  $prices['wartosci_promocji']['wysokosc_rabatu_w_%'];
$ofertProcent = $ofertProcent == false ? 0 : $ofertProcent;
$ofertDiscPart = $prices['wartosci_promocji']['przedzial_czasowy_objety_promocja'];
$promo = $prices['czy_pojazd_jest_objety_promocja'];
$promo = $promo[0] == 'tak' ? 'true' : 'false';

?>
<div class="booking-page__resume__details" data-pro="<?php echo $promo; ?>" data-discpart="<?php echo $ofertDiscPart; ?>" data-disc="<?php echo $ofertProcent; ?>" data-priceone="<?php echo $prices['1-4_dni']; ?>" data-pricetwo="<?php echo $prices['5-14_dni']; ?>" data-pricetree="<?php echo $prices['15+_dni']; ?>" data-pricefour="<?php echo $prices['miesiac']; ?>" >
    <?php get_template_part( 'templates-parts/booking/booking-car', 'small' ); ?>

    <div class="box deposit">
        <div class="item deposit">
            <span>Kaucja jest zwracana w ciągu</br>7 dni od momentu zwrotu pojazdu.</span>
            <span class="deposit-value"><b><?php echo $kaucja ? $kaucja : '0'; ?> zł</b></span>
        </div>
    </div>
    
    <div class="box from-to-price">
        <?php if(isset($_COOKIE['carID'])) : ?>
        <div class="item from">
            <span>Od:</span>
            <span class="from-value"><b>---</b></span>
        </div>
        <div class="item do">
            <span>Do:</span>
            <span class="to-value"><b>---</b></span>
        </div>
        <?php endif; ?>
        <div class="item price">
            <span> Cena najmu: </span>
            <span class="price-value">0 zł</span>
        </div>
    </div>
    
  
    <div class="box extras">
        <?php if(isset($_COOKIE['carID'])) : ?>
        <!-- <div class="item extra-item">
            <span class="extra-item">Zwrot pojazdu w dowolnym miejscu w Warszawie. Nie dotyczy siedziby firmy.</span>
            <span class="extra-item__price"><b>50 zł</b></span>
        </div>
        <div class="item extra-item">
            <span class="extra-item">Zwrot pojazdu w dowolnym miejscu w Warszawie. Nie dotyczy siedziby firmy.</span>
            <span class="extra-item__price"><b>50 zł</b></span>
        </div> -->
        <?php endif; ?>
         <div class="item extra-item extra-item--price">
            <span> Dodatki: </span>
            <span class="extra-item__price-total"> 0 zł</span>
        </div>
    </div>
</div>
<?php if(isset($_COOKIE['carID'])) : ?>
<div class="total-price">
    <div class="total-price__wraper">
        <span>Cena całkowita: </span>
        <span class="price">0 zł</span>
    </div>
    <?php if($promo == 'true') { ?>
    <div class="total-price__wraper total-price__wraper--down">
       
    </div>
    <?php } ?>
</div>
<?php endif; ?>