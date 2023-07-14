<?php 
$futured =get_field( 'wyposazenie' );
?>

<div class="car-futured">
    <div class="car-section-title">
        <h3>Wyposażenie:</h3>
    </div>
    <?php if($futured) : ?>
	<ul class="opinions">
	<?php foreach ( $futured as $item ) : ?>
		<li class="item">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15.999" viewBox="0 0 18 15.999">
            <path id="Shape_928" data-name="Shape 928" d="M1315.048,1143.813c.256-.452.492-.9.76-1.336a20.23,20.23,0,0,1,3.806-4.426,30.056,30.056,0,0,1,5.728-3.97.408.408,0,0,1,.585.089c.129.19.083.395-.13.583a29.59,29.59,0,0,0-8.816,13.545c-.133.422-.24.853-.353,1.281-.051.192-.123.36-.336.409a.452.452,0,0,1-.45-.2q-3.833-4.187-7.668-8.372a.442.442,0,0,1-.141-.507.452.452,0,0,1,.482-.247q1.763.007,3.525,0a.587.587,0,0,1,.488.22q1.216,1.424,2.441,2.84Z" transform="translate(-1307.999 -1134.001)" fill="#00ac10"/>
        </svg>
		 <?php echo $item['wartosc']; ?>
        </li>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>