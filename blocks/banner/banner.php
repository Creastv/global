<?php 
$title= get_field( 'title' );
$dsc = get_field( 'opis' );
$image = get_field( 'img' );
$size = 'full';
$link = get_field( 'btn' );

        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        endif;
?>


<div class="banner">
    <div class="banner__wrap">
    <div class="left">
    <?php echo $title ? '<h4> ' .  $title . ' </h4>' : false; ?>
    <?php echo $dsc ? '<p> ' . $dsc . ' </p>' : false; ?>
    </div>
    <?php 
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        }
    ?>
    <div class="right">
        <?php if( $link ):  ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    </div>
</div>