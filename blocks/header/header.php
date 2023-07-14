<?php 
$img = get_field( 'zdjecie_wyrozniajace' );
if(!$img ){
    $align= "col-full text-center";
}
$title = get_field( 'title' );
$tag = get_field( 'tag' );
$subtitle = get_field( 'subtytul' );
$desc= get_field( 'dopisek' );
$link= get_field( 'cta' );
if($link){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

$dBadge = get_field( 'wyswietl_odznaki' );
$dvotes = get_field( 'wyswietl_opinie' );
$wrap = get_field( 'pelna_szerokosc' );

$container = "";
if($wrap){
    $container = "container-fluid";
} else {
    $container = "container";
}

$video = get_field( 'video' );
$filmik = get_field( 'filmik' );
?>
<div class="b-header">
    <div class="<?php echo $container; ?>">
        <div class="row">
            <div class="b-header__wraper">
                <div class="col <?php echo  $align; ?>">
                    <?php if($title) { ?>
                    <<?php echo $tag; ?> class="entry-title section-title"><?php echo $title; ?>
                        <?php if($subtitle) { ?>
                        <span class="section-subtitle"><?php echo $subtitle; ?></span>
                        <?php } ?>
                    </<?php echo $tag; ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                        <path id="Shape_3_copy_6" data-name="Shape 3 copy 6" d="M1283.5,1363a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1283.5,1363Z" transform="translate(-1269 -1345.999)" fill="#575289" />
                    </svg>
                    <?php } ?>
                    <?php if($desc) { ?>
                    <div class="desc">
                        <p><?php echo $desc; ?></p>
                    </div>
                    <?php } ?>
                    <?php if($link) { ?>
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php } ?>
                    <?php if($dBadge) { ?>
                    <div class="badges-only">
                        <?php  get_template_part('templates-parts/parts/badges'); ?>
                    </div>
                    <?php } ?>
                </div>
                <?php if($img) { ?>
                <div class="col">
                    <?php if(get_field('cupon')) { ?>
                    <div class="sm-code">
                    <?php  get_template_part('templates-parts/parts/cod'); ?>
                    </div>
                    <?php } ?>
                    <div class="img">
                        <?php echo wp_get_attachment_image( $img, $size ); ?>
                        <?php if($video) { ?>
                        <svg class="play-video display" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="240" height="240" viewBox="0 0 240 240">
                            <defs>
                                <filter id="Icon_material-play-circle-outline" x="0" y="0" width="240" height="240" filterUnits="userSpaceOnUse">
                                    <feOffset input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="15" result="blur" />
                                    <feFlood flood-opacity="0.259" />
                                    <feComposite operator="in" in2="blur" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Icon_material-play-circle-outline)">
                                <path id="Icon_material-play-circle-outline-2" data-name="Icon material-play-circle-outline" d="M63,111.75,108,78,63,44.25ZM78,3a75,75,0,1,0,75,75A75.027,75.027,0,0,0,78,3Zm0,135a60,60,0,1,1,60-60A60.08,60.08,0,0,1,78,138Z" transform="translate(42 42)" fill="#c5fbec" />
                            </g>
                        </svg>
                        <?php } ?>
                       
                    </div>
                    <svg class="o-smile" xmlns="http://www.w3.org/2000/svg" width="264.001" height="156" viewBox="0 0 264.001 156">
                        <path id="Shape_3" data-name="Shape 3" d="M2459,1618c-72.789,0-132-59.225-132-132.031a23.963,23.963,0,1,1,47.927,0,84.074,84.074,0,1,0,168.148,0,23.963,23.963,0,1,1,47.927,0C2591,1558.774,2531.788,1618,2459,1618Z" transform="translate(-2326.998 -1461.999)" fill="#9ef8df" opacity="0.6" />
                    </svg>
                </div>
                <?php } ?>
            </div>
            <?php if($dvotes) { ?>
            <?php  get_template_part('templates-parts/parts/score-vote'); ?>
            <?php } ?>
            <?php if(get_field('cupon')) { ?>
            <div class="md-code">
            <?php  get_template_part('templates-parts/parts/cod'); ?>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>

<?php if($video) { ?>
<!-- modal -->
<div class="mod-bg">
    <div class="mod-container">
        <div class="mod-wraper">
            <div class="close">x</div>
            <div class="col">
                <video width="100%" height="100%" controls>
                    <source src="<?php echo $filmik; ?>" type="video/mp4">
                    <source src="<?php echo $filmik; ?>" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
<!-- END modal -->
<script>
const display = document.querySelectorAll('.display');
const close = document.querySelector('.close');
let flag = false;


// let in = document.querySelector('.job-title');

function displayModal(e) {
    e.preventDefault();
    if (flag == false) {
        document.querySelector('.mod-bg').style.display = "block";
        document.querySelector('.mod-bg video').play();
        flag = true
    } else {
        document.querySelector('.mod-bg').style.display = "none";
        document.querySelector('.mod-bg video').pause();
        flag = false
    }
}

for (let i = 0; i < display.length; i++) {
    display[i].addEventListener('click', displayModal);
};
// display.addEventListener('click', displayModal);
close.addEventListener('click', displayModal);
</script>
<?php } ?>
