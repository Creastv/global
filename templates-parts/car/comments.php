<?php
$args = array(
	'status'  => 'approve',
	'number'  => '5',
	'post_id' => get_the_ID(), // use post_id, not post_ID
);
$comments = get_comments( $args );
//var_dump($comments);
?>

<div class="car-opinions">
	<div class="car-section-title">
	<h3>Co mowią o nas klienci</h3>
	<p>Opinie wystawiane są tylko przez zweryfikowanych klientów.</p>
	</div>

	<?php if($comments) : ?>
	<ul class="opinions">
		<?php
			$comments = get_comments(array(
				'post_id' => get_the_ID(),
				'status' => 'approve'
			));
			wp_list_comments(array(
				'per_page' => 5,
				'reverse_top_level' => false
			), $comments);
		?>
	</ul>
	<?php endif; ?>
	<div class="add-opinion">
		<?php if($comments) : ?>
		<p>Podziel się z nami Twoim doświadczeniem.</p>
		<?php else : ?>
			<p>Bądź pierwszy i podziel się z nami swoim doświatczeniem</p>
		<?php endif; ?>
		<a href="#" class="opener-modal btn-revers ">Wystaw opinię</a>
	</div>
</div>
