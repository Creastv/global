<?php 
$manus = get_field( 'menus', 'options' );
?>
<?php if($manus) : ?>
	<?php foreach($manus as $menu) : ?>
	<div class="col">
		<div class="calaps">
            <?php if($menu['title']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu['title']; ?></p>
                </div>
            <?php } ?>

            <?php if($menu['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu['menu']; ?>
                </div>
            <?php } ?>
        </div>
	</div>
	<?php endforeach; ?>
<?php endif; ?>