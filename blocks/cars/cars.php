<?php 
$display = get_field( 'sortuj_po' );
$link =get_field( 'link' );
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<?php get_template_part( 'blocks/cars/cars-swicher' );  ?>
<?php if($display == 1) : ?>
<?php get_template_part( 'blocks/cars/cars-flota-all' );  ?>
<?php elseif($display == 2 || $display == 3 || $display == 4) : ?>
<?php get_template_part( 'blocks/cars/cars-type' );  ?>
<?php else : ?>
<?php get_template_part( 'blocks/cars/cars-free' );  ?>
<?php endif; ?>

<?php if($link) : ?>
<div class="wr-btn text-center">
     <a class="btn-revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
<?php endif; ?>


