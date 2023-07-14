<?php
$cta = get_field( 'cta', 'options');
$tel = get_field( 'nr_telefonu', 'options' );
$desc = get_field( 'tekst_zachecajacy_do_rezerwacji', 'options' );
$bookLink = get_field( 'lik_do_podstrony_z_rezerwacja', 'options' );
?>

<div class="car-cta">
    <div class="cta-wraper">
        <?php if($desc) : ?>
        <p><?php echo $desc; ?></p>
        <?php endif; ?>
        <div class="btn-wraper">
        <?php if($bookLink) : ?>
        <a href="<?php echo $bookLink; ?>" class="btn">Zarezerwuj</a>
        <?php endif; ?>
        <?php if($tel) : ?>
        <a href="tel:+48530774774" class="btn-revers"><?php echo $tel; ?></a>
        <?php endif; ?>
        </div>
    </div>
</div>