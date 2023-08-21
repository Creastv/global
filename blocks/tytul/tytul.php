<?php
$title = get_field( 'tytul' );
$subtitle = get_field( 'nad_tytulem' );
$desc = get_field( 'desc' );
$tag = get_field( 'tag' );
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}
?>

<div class="b-title <?php echo esc_attr( $class_name ); ?>">
    <?php echo $subtitle ? '<span class="color-main"> ' . $subtitle .  ' </span>' : false; ?>
    <<?php echo $tag; ?> class="b-title__h"><?php echo $title; ?> </<?php echo $tag; ?>>
    <?php if($desc) { ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="33.112" height="17.031" viewBox="0 0 33.112 17.031">
        <g id="Group_11582" data-name="Group 11582" transform="translate(1248.563 502)" opacity="0.5">
            <path id="Path_6982" data-name="Path 6982" d="M-1236.679-501.958h7.464l-11.649,17.026-7.7-.018Z" transform="translate(0 -0.04)" fill="#e11f26" opacity="0.102"/>
            <path id="Path_6983" data-name="Path 6983" d="M-1096.625-502h6.311l-11.645,17.031h-6.311Z" transform="translate(-132.596)" fill="#e11f26" opacity="0.2"/>
            <path id="Path_6984" data-name="Path 6984" d="M-981.327-501.646h7.464l-11.74,16.984h-7.349Z" transform="translate(-241.588 -0.335)" fill="#e11f26" opacity="0.6"/>
        </g>
        </svg>

    <div class="b-title__p">
        <p><b><?php echo $desc; ?></b></p>
    </div>
    <?php } ?>
</div>
