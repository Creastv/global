<?php 
$style = get_field( 'style' );
$link = get_field( 'btn' );
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}

?>
<?php if($style == "Main") { ?>
<div class="btn-wrap <?php echo esc_attr( $class_name ); ?>">
    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
<?php } elseif ($style == "Revers") { ?>
<div class="btn-wrap <?php echo esc_attr( $class_name ); ?>">
    <a class="btn-revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    </a>
</div>
<?php }  elseif ($style == "Link") { ?>
<div class="btn-wrap <?php echo esc_attr( $class_name ); ?>">
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
<?php } ?>
