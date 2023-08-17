<?php 
$adres = get_field( 'adres_map', 'options' );
$link = get_field( 'link_jak_dojechac', 'options' );

if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$map = get_field( 'mapa', 'options' );
$lokalizacje = get_field( 'lokalizacje', 'options' );

?>
<div id="localization">
    <div class="top">
        <?php echo $adres ? '<p>' . $adres . '</p>': false; ?>
        <?php if($link) { ?>
         <a class="btn-revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php } ?>
    </div>
    <div class="middle">
        <?php echo $map; ?>
    </div>
    <div class="bottom">
        <?php echo $lokalizacje['tytul'] ? '<p><b>' . $lokalizacje['tytul'] . '</b></p>' : false; ?>
        <div class="localizations">
            <ul>
            <?php foreach($lokalizacje['lokalizacje'] as $item) : ?>
            <li> <a href="<?php echo  $item['nazwa']['url'] ; ?>" target="<?php echo $item['nazwa']['target'] ? $item['nazwa']['target'] : '_self' ; ?>"><?php echo $item['nazwa']['title']; ?></a></li>
            <?php endforeach; ?> 
           </ul>  
        </div>
    </div>
</div>