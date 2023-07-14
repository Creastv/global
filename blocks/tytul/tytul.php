<?php
$title = get_field( 'tytul' );
$desc = get_field( 'desc' );
$tag = get_field( 'tag' );
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}
?>

<div class="b-title <?php echo esc_attr( $class_name ); ?>">
    <<?php echo $tag; ?> class="b-title__h"><?php echo $title; ?> </<?php echo $tag; ?>>
    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
        <path id="Shape_3_copy_6" data-name="Shape 3 copy 6" d="M1283.5,1363a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1283.5,1363Z" transform="translate(-1269 -1345.999)" fill="#575289" />
    </svg>
    <?php if($desc) { ?>
    <div class="b-title__p">
        <p><?php echo $desc; ?></p>
    </div>
    <?php } ?>
</div>
