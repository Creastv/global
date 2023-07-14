<?php 
$content = get_field( 'dlugi_opis' );
?>
<?php if(!empty($content)) : ?>
<div class="entry-content">
    <?php echo $content; ?>
</div>
<?php endif; ?>