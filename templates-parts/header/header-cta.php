<?php 
$link = get_field( 'cta', 'options' );
if( $link ) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<div class="header__cta">
    <?php if($link) {  ?>
    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php } ?>
</div>
