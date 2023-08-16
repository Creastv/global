<?php 
$navigacja = get_field( 'navigacja', 'options' );
?>

<?php if(!empty($navigacja)) : ?>
    <ul>
    <?php foreach($navigacja as $tax){ ?>
        <li>
            <a href="<?php echo  $tax['link']['url']; ?>" target="<?php echo $tax['link']['target'] ? $tax['link']['target'] : '_self' ; ?>"><?php echo  $tax['link']['title']; ?></a> 
       </li>
    <?php  }; ?>
    </ul>
<?php endif; ?>