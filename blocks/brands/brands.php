<?php 
$taxonomies = get_field('marki');
?>
<div class="go-brands">
    <ul>
        <?php
        foreach($taxonomies as $tax){
            $image = get_field('logo', $tax->taxonomy . '_' . $tax->term_id);
            if( $image ) :
            echo '<li>';
            echo '<a href=" '. esc_url( get_term_link( $tax ) ) . '"> ';
            echo wp_get_attachment_image( $image, 'full' );
            echo ' </a>';
            echo '</li>';
            endif;
        };
        ?>
    </ul>

</div>

