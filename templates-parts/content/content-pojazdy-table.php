<?php
$imgFutured = get_field( 'zdjecie', get_the_ID() );
$prices = get_field( 'cena', get_the_ID() );
$opis = get_field( 'opis', get_the_ID() );
$liczbaKomentarzy = get_comments_number();
$rewiev = '';
switch($liczbaKomentarzy){
    case 0 :
    $rewiev = 'komentarzy';
    break;
    case 1 :
    $rewiev = 'komentarz';
    break;
    default :
    $rewiev = 'komentarzy';
    break;
};

$kaucja = $prices['kaucja'];

$priceFrom = $prices['miesiac'];
$ofert = $prices['czy_pojazd_jest_objety_promocja'];
$infoPromo = $prices['info_promocji'];
    
if($ofert) {
    $ofertProcent =  $prices['wartosci_promocji']['wysokosc_rabatu_w_%'];
    $ofertScal = $prices['wartosci_promocji']['przedzial_czasowy_objety_promocja'];


    switch ($ofertScal) {
        case '1-4 dni':
            $pr = $prices['1-4_dni'] * $ofertProcent/100;
            $offertPriceFrom = floor($prices['1-4_dni'] - $pr);
            break;
        case '5-14 dni':
            $pr = $prices['5-14_dni']  * $ofertProcent/100;
            $offertPriceFrom = floor($prices['5-14_dni'] - $pr);
            break;
        case '15+ dni':
            $pr = $prices['15+_dni']  * $ofertProcent/100;
             $offertPriceFrom = floor($prices['15+_dni'] - $pr);
            break;
        case 'Miesiąc';
            $pr = $prices['miesiac'] * $ofertProcent/100;
            $pr = $prices['miesiac'] - $pr;
            $pr = $pr / 30;
            $offertPriceFrom = floor($pr);
        break;
    }
}

$dopisek = ' <small>Cena przy wynajmie<br>powyżej 30 dni</small>';
 if($ofert){
    if(floor($priceFrom / 30) > $offertPriceFrom  ){
        $priceFrom = '<div><small> ' . floor($priceFrom / 30) . ' zł </small>' . $offertPriceFrom . ' zł </div>';
    } else {
        $priceFrom = floor($priceFrom / 30) . ' zł';
    }
 } else {
     if(is_numeric($priceFrom)){
        $priceFrom = floor($priceFrom / 30) . ' zł';
    } else {
        $priceFrom = $prices['1-4_dni'] . ' zł';

    }
 }

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('car-list'); ?>>
    <header>
        <a href="<?php the_permalink(); ?>">
            <?php echo $ofert == true ? '<span class="label">Promocja -' . $ofertProcent . '% </span>' : false; ?>
            <?php echo wp_get_attachment_image( $imgFutured, 'medium' ); ?>
             <?php if($liczbaKomentarzy > 0) { ?>
            <span class="opinie">
                <span> <?php echo $liczbaKomentarzy .'<small> ' .$rewiev . '</small>'; ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="11.202" height="11.197" viewBox="0 0 11.202 11.197">
                <path id="Shape_924_copy_4" data-name="Shape 924 copy 4" d="M1466.195,744.539a1.061,1.061,0,0,1-.377.514c-.736.67-1.469,1.343-2.207,2.011a.147.147,0,0,0-.039.169q.344,1.575.688,3.15a.625.625,0,0,1-.511.809.616.616,0,0,1-.423-.118q-.946-.592-1.893-1.182c-.247-.154-.5-.305-.739-.464a.155.155,0,0,0-.195,0q-1.318.829-2.641,1.651a.6.6,0,0,1-.939-.62c.182-.867.373-1.731.561-2.6.046-.211.09-.422.14-.632a.156.156,0,0,0-.053-.175q-1.178-1.071-2.353-2.149a.615.615,0,0,1-.194-.657.569.569,0,0,1,.5-.443c.2-.027.406-.043.609-.063l1.86-.177c.225-.021.45-.043.675-.06a.156.156,0,0,0,.149-.117c.4-.988.808-1.974,1.21-2.962a.6.6,0,0,1,.541-.427.586.586,0,0,1,.6.409q.549,1.339,1.1,2.679c.044.108.083.219.135.323a.166.166,0,0,0,.107.084c.366.041.732.073,1.1.108l1.588.151c.159.015.319.027.478.048a.583.583,0,0,1,.512.459c0,.01.013.017.02.025Z" transform="translate(-1454.992 -739.999)" fill="#f5cb24"/>
                </svg>
            </span>
            <?php } ?>
        </a>
    </header>
    <div class="content">
        <h2 class="entry-title"><a class="js-poj" data-id="<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
        <ul class="car-info">
        <?php if($opis['moc']) : ?>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="25.985" height="24.869" viewBox="0 0 25.985 24.869">
                    <g id="Group_11575" data-name="Group 11575" transform="translate(560.583 -317.64)">
                        <path id="Path_6965" data-name="Path 6965" d="M-534.6,323.02l-3.623,6.628q-.316.577-.636,1.152a1.257,1.257,0,0,1-1.83.521c-.694-.381-1.386-.765-2.1-1.158-.147.263-.287.511-.424.76-.387.7-.763,1.41-1.162,2.1a3.151,3.151,0,0,0-.147,3,4.611,4.611,0,0,1-2.974,6.3c-.265.076-.539.121-.809.181h-.914a.872.872,0,0,0-.143-.045,4.615,4.615,0,0,1-3.069-7.39.769.769,0,0,0,.078-.988c-.034-.058-.062-.12-.095-.179-.256-.466-.517-.929-.768-1.4a.4.4,0,0,1,.146-.569.407.407,0,0,1,.564.171c.114.187.217.381.321.574.252.463.5.926.748,1.382l.9-.5-1.624-2.909c-1.08.594-2.127,1.173-3.178,1.747a1.233,1.233,0,0,1-1.8-.529q-.97-1.748-1.93-3.5c-.512-.938-1.013-1.882-1.518-2.823v-.508a1.558,1.558,0,0,1,.694-.861q2.741-1.5,5.477-3.014a1.255,1.255,0,0,1,1.844.539q1.609,2.914,3.214,5.83a1.257,1.257,0,0,1-.549,1.877c-.5.279-1,.555-1.509.836a1.308,1.308,0,0,0,.053.13c.441.8.879,1.6,1.326,2.391a2.537,2.537,0,0,0,.334.443.284.284,0,0,0,.214.079,3.076,3.076,0,0,0,2.464-1.683c.488-.906.994-1.8,1.492-2.7.035-.063.064-.13.1-.207-.682-.377-1.332-.771-2.012-1.1a1.342,1.342,0,0,1-.568-1.977c1.314-2.319,2.59-4.661,3.865-7a1.853,1.853,0,0,1,1.02-.983h.507c.167.077.339.144.5.232,2.193,1.206,4.381,2.422,6.578,3.619a1.715,1.715,0,0,1,.942,1.022Zm-10.222-1.442c-.051.086-.095.157-.135.23q-1.174,2.128-2.347,4.256c-.223.4-.172.579.226.8l6.714,3.7c.42.231.6.178.835-.247l2.335-4.233c.04-.072.074-.148.115-.231-.076-.045-.139-.085-.2-.121L-541,323.679c-.554-.306-1.11-.608-1.661-.919a.4.4,0,0,1-.192-.558.413.413,0,0,1,.568-.164c.054.024.105.053.157.081l3.967,2.188,1.5.823.5-.913-7.76-4.279-.5.916c.285.158.544.3.8.443.283.16.369.371.248.6s-.353.277-.655.113C-544.292,321.868-544.549,321.726-544.82,321.577Zm.126,7.531c-.045.076-.077.125-.1.176-.523.945-1.037,1.894-1.57,2.834a3.774,3.774,0,0,1-2.876,1.969,3.808,3.808,0,0,0-3.277,4.356,3.8,3.8,0,0,0,4.909,3.063,3.786,3.786,0,0,0,2.339-5.164,3.949,3.949,0,0,1,.2-3.733c.5-.872.972-1.757,1.456-2.636.035-.064.065-.132.105-.214Zm-13.59-1.018c.041.082.069.142.1.2q.868,1.574,1.737,3.147c.212.384.395.435.782.222l5.365-2.957c.366-.2.426-.4.227-.766q-.658-1.2-1.32-2.395l-.53-.958c-.119.064-.223.119-.326.175q-2.018,1.111-4.036,2.222c-.288.158-.51.118-.638-.1s-.045-.45.252-.614l2.283-1.26,2.068-1.142-.406-.733-6.367,3.511.408.73c.232-.127.438-.243.647-.352a.406.406,0,0,1,.606.143.409.409,0,0,1-.21.571C-557.845,327.851-558.052,327.962-558.284,328.091Zm22.516-4.591.217-.4c.224-.408.178-.575-.224-.8l-3.653-2.018q-1.561-.862-3.123-1.721c-.3-.164-.508-.137-.665.1-.114.172-.2.361-.312.556Zm-23.7,2.412,6.345-3.5-.1-.182c-.272-.5-.421-.544-.919-.269-1.7.937-3.39,1.886-5.1,2.8-.738.4-.568.613-.279,1.1A.3.3,0,0,0-559.468,325.912Z"/>
                        <path id="Path_6966" data-name="Path 6966" d="M-309.678,420.134c-.415.038-.658-.187-.52-.493a.578.578,0,0,1,.344-.286,1.491,1.491,0,0,1,1.769,1.131,1.517,1.517,0,0,1-1.085,1.785A1.512,1.512,0,0,1-311,421.224c-.081-.3.02-.54.25-.609.249-.074.437.059.544.387a.673.673,0,0,0,.709.49.681.681,0,0,0,.614-.579.663.663,0,0,0-.451-.734A1.919,1.919,0,0,0-309.678,420.134Z" transform="translate(-232.669 -94.795)"/>
                        <path id="Path_6967" data-name="Path 6967" d="M-424.076,581.065a2.776,2.776,0,0,1-2.551-3.97c.155-.318.349-.421.588-.313.255.116.3.327.149.666a1.9,1.9,0,0,0,.258,2.09,1.837,1.837,0,0,0,1.856.677,1.868,1.868,0,0,0,1.548-1.457,1.956,1.956,0,0,0-2.4-2.355,2.085,2.085,0,0,1-.243.067.4.4,0,0,1-.433-.31.391.391,0,0,1,.285-.49,2.663,2.663,0,0,1,2.225.191,2.774,2.774,0,0,1,1.4,2.954,2.8,2.8,0,0,1-2.286,2.222A3.426,3.426,0,0,1-424.076,581.065Z" transform="translate(-124.629 -240.421)"/>
                        <path id="Path_6968" data-name="Path 6968" d="M-484.931,455.208a1.3,1.3,0,0,1,1.307-1.323,1.327,1.327,0,0,1,1.333,1.31,1.346,1.346,0,0,1-1.319,1.333A1.321,1.321,0,0,1-484.931,455.208Zm1.309-.5a.486.486,0,0,0-.492.5.492.492,0,0,0,.5.491.5.5,0,0,0,.5-.5A.5.5,0,0,0-483.622,454.707Z" transform="translate(-70.532 -127.024)"/>
                    </g>
                </svg>
                <div>
                    <span>Moc</span>
                    <p> <?php echo $opis['moc']; ?></p>
                </div>
            </li>
        <?php endif; ?>
        <?php if($opis['silnik']) : ?>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="22.725" height="22.715" viewBox="0 0 22.725 22.715">
                    <g id="Group_11576" data-name="Group 11576" transform="translate(1679.663 -22.248)">
                        <path id="Path_6969" data-name="Path 6969" d="M-1662.339,36.42c.42.02.812.013,1.2.061a1.764,1.764,0,0,1,1.52,1.72c.007.417,0,.835,0,1.252a.886.886,0,0,0,.9.894.868.868,0,0,0,.867-.89q.006-4.5,0-9c0-.052-.01-.1-.019-.2-.178,0-.354.007-.528,0a1.764,1.764,0,0,1-1.7-1.74c-.011-.888,0-1.776-.011-2.663a.637.637,0,0,0-.161-.387c-.3-.324-.632-.623-.946-.937a.452.452,0,0,1-.055-.66.452.452,0,0,1,.684.015c1.164,1.121,2.326,2.243,3.476,3.377a.713.713,0,0,1,.166.451c.019.612.008,1.225.008,1.838q0,4.887,0,9.775a1.8,1.8,0,0,1-1.158,1.819,1.8,1.8,0,0,1-2.426-1.671c0-.4,0-.8,0-1.2a.863.863,0,0,0-.8-.905c-.323-.032-.653-.006-1-.006V42.35h1.156c.54,0,.679.139.679.677,0,.453,0,.906,0,1.358,0,.419-.161.576-.582.576H-1679.1c-.42,0-.562-.141-.564-.554,0-.506,0-1.012,0-1.518,0-.367.168-.534.538-.538.417-.005.833,0,1.293,0V42q0-9.522,0-19.043a1.613,1.613,0,0,1,.02-.344.422.422,0,0,1,.426-.365c.08,0,.16,0,.24,0h14.116c.581,0,.689.111.689.7V36.42Zm-14.57,5.908h13.645V23.178h-13.645Zm-1.831,1.708h17.32v-.762h-17.32ZM-1659.2,26.5c0,.65.031,1.228-.008,1.8-.049.717.482,1.223,1.351,1.012,0-.463,0-.932,0-1.4a.257.257,0,0,0-.061-.165C-1658.326,27.347-1658.738,26.949-1659.2,26.5Z"/>
                        <path id="Path_6970" data-name="Path 6970" d="M-1622.275,47.827h5.327c.437,0,.592.154.592.591q0,3.063,0,6.126c0,.45-.153.605-.609.606q-5.314,0-10.627,0c-.477,0-.617-.143-.618-.623q0-3.036,0-6.073c0-.5.133-.627.635-.627Zm4.992,6.4V48.75h-10v5.475Z" transform="translate(-47.797 -23.762)"/>
                        <path id="Path_6971" data-name="Path 6971" d="M-1506.522,181.951c0-.666-.017-1.332,0-2a1.572,1.572,0,0,1,1.442-1.516,1.6,1.6,0,0,1,1.672,1.125,1.758,1.758,0,0,1,.081.5c.006,1.269.011,2.539,0,3.808a1.6,1.6,0,0,1-1.366,1.59,1.572,1.572,0,0,1-1.789-1.194,3.532,3.532,0,0,1-.049-.767c-.007-.515,0-1.03,0-1.545Zm.9.014c0,.6-.007,1.207,0,1.81a1.059,1.059,0,0,0,.1.456.67.67,0,0,0,.779.311.725.725,0,0,0,.506-.758q0-1.823,0-3.646a.732.732,0,0,0-.71-.8.707.707,0,0,0-.68.789C-1505.622,180.741-1505.619,181.353-1505.619,181.965Z" transform="translate(-160.834 -145.084)"/>
                    </g>
                </svg>
                <div>
                    <span>Silnik</span>
                    <p><?php echo $opis['silnik']; ?></p>
                </div>
            </li>
        <?php endif; ?>
        <?php if($opis['skrzynia_biegow']) : ?>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20.935" height="20.921" viewBox="0 0 20.935 20.921">
                    <g id="Group_11577" data-name="Group 11577" transform="translate(1313.194 2.111)">
                        <path id="Path_6972" data-name="Path 6972" d="M-1302,9.074v.244c0,1.338,0,2.676,0,4.014a.256.256,0,0,0,.2.295,2.618,2.618,0,0,1,1.743,2.66,2.656,2.656,0,0,1-2.309,2.5,2.691,2.691,0,0,1-2.944-1.974,2.671,2.671,0,0,1,1.618-3.166.311.311,0,0,0,.247-.352c-.011-1.315-.006-2.63-.006-3.945V9.087h-6.322c0,.077-.01.15-.01.223,0,1.338,0,2.676,0,4.014a.273.273,0,0,0,.216.307,2.644,2.644,0,0,1,1.73,2.737,2.676,2.676,0,0,1-2.321,2.417,2.684,2.684,0,0,1-2.939-2.01,2.66,2.66,0,0,1,1.66-3.142.262.262,0,0,0,.2-.293q-.007-4.994,0-9.989a.261.261,0,0,0-.2-.295,2.661,2.661,0,0,1-1.713-2.9,2.661,2.661,0,0,1,2.577-2.269A2.671,2.671,0,0,1-1307.891,0a2.665,2.665,0,0,1-1.661,3.045.314.314,0,0,0-.24.36c.009,1.307,0,2.615,0,3.923V7.6h6.333v-.2c0-1.346,0-2.691,0-4.037a.258.258,0,0,0-.2-.3,2.66,2.66,0,0,1-1.713-2.977,2.674,2.674,0,0,1,2.6-2.192,2.669,2.669,0,0,1,2.67,2.19,2.678,2.678,0,0,1-1.708,2.985c-.1.039-.2.055-.2.22.009,1.406.005,2.813.006,4.219a.887.887,0,0,0,.011.1h6.31c0-.078.01-.151.01-.225,0-1.338,0-2.676.005-4.014a.275.275,0,0,0-.217-.308A2.668,2.668,0,0,1-1297.6.231a2.688,2.688,0,0,1,2.632-2.342A2.666,2.666,0,0,1-1292.3.138a2.658,2.658,0,0,1-1.705,2.92.26.26,0,0,0-.2.293c.006,1.6,0,3.208,0,4.812,0,.65-.262.912-.911.912H-1302Zm-.733-9.723a1.212,1.212,0,0,0-1.217,1.213,1.232,1.232,0,0,0,1.225,1.213A1.232,1.232,0,0,0-1301.5.557,1.212,1.212,0,0,0-1302.73-.649Zm-.009,17.989a1.212,1.212,0,0,0,1.234-1.2,1.231,1.231,0,0,0-1.208-1.229,1.23,1.23,0,0,0-1.233,1.2A1.212,1.212,0,0,0-1302.739,17.34ZM-1311.72.54a1.211,1.211,0,0,0,1.188,1.237,1.221,1.221,0,0,0,1.237-1.2,1.207,1.207,0,0,0-1.2-1.231A1.192,1.192,0,0,0-1311.72.54Zm1.2,16.8a1.21,1.21,0,0,0,1.225-1.2,1.221,1.221,0,0,0-1.208-1.225,1.208,1.208,0,0,0-1.219,1.208A1.192,1.192,0,0,0-1310.519,17.34ZM-1293.731.564a1.192,1.192,0,0,0-1.206-1.214,1.209,1.209,0,0,0-1.22,1.206,1.221,1.221,0,0,0,1.213,1.22A1.209,1.209,0,0,0-1293.731.564Z" transform="translate(0)"/>
                        <path id="Path_6973" data-name="Path 6973" d="M-1051.756,256.466a2.655,2.655,0,0,1-2.676,2.668,2.67,2.67,0,0,1-2.668-2.683,2.68,2.68,0,0,1,2.693-2.661A2.669,2.669,0,0,1-1051.756,256.466Zm-1.46.014a1.209,1.209,0,0,0-1.193-1.232,1.22,1.22,0,0,0-1.233,1.2,1.208,1.208,0,0,0,1.2,1.227A1.193,1.193,0,0,0-1053.216,256.48Z" transform="translate(-240.516 -240.335)"/>
                    </g>
                </svg>
                <div>
                    <span>Skrzynia</span>
                    <p><?php echo $opis['skrzynia_biegow']; ?></p>
                </div>
            </li>
        <?php endif; ?>
        <?php if($opis['przyspieszenie']) : ?>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="28.356" height="18.941" viewBox="0 0 28.356 18.941">
                    <g id="Group_11578" data-name="Group 11578" transform="translate(1708.25 990.36)">
                        <path id="Path_6974" data-name="Path 6974" d="M-1708.25-975.3v-1.717c.017-.089.039-.178.051-.268.064-.493.1-.991.192-1.478a14.014,14.014,0,0,1,5.033-8.429,13.821,13.821,0,0,1,6.954-3.01c.482-.066.967-.109,1.451-.162h1c.126.017.252.036.379.052.648.083,1.3.123,1.943.255a13.95,13.95,0,0,1,7.949,4.673,13.841,13.841,0,0,1,3.188,6.76c.093.532.149,1.071.221,1.607v1.772c-.017.06-.039.12-.049.181q-.227,1.316-.451,2.632a1.148,1.148,0,0,1-.884,1.008h-25.587a1.052,1.052,0,0,1-.808-.742c-.125-.5-.256-1-.348-1.5C-1708.12-974.2-1708.176-974.751-1708.25-975.3Zm14.168,2.925v-.005q6.174,0,12.348.006c.25,0,.367-.055.435-.315a13.089,13.089,0,0,0,.282-5.644,12.916,12.916,0,0,0-4.87-8.223,12.86,12.86,0,0,0-10.557-2.623,12.623,12.623,0,0,0-7.921,4.713,13.035,13.035,0,0,0-2.489,11.765c.066.266.186.333.451.332Q-1700.242-972.378-1694.082-972.371Z" transform="translate(0 0)"/>
                        <path id="Path_6975" data-name="Path 6975" d="M-1665.227-962.227a11.161,11.161,0,0,0-10.484,0c.21.364.421.728.629,1.094.186.327.142.6-.115.745s-.508.056-.7-.274c-.21-.357-.416-.716-.643-1.107a11.375,11.375,0,0,0-3.5,3.493c.38.22.756.424,1.116.653.124.079.278.211.293.334a.587.587,0,0,1-.155.478.622.622,0,0,1-.528.032c-.407-.189-.786-.436-1.2-.675a11.159,11.159,0,0,0-1.28,4.788c.472,0,.928-.005,1.385,0a.443.443,0,0,1,.477.485.47.47,0,0,1-.521.453c-.44.006-.881,0-1.367,0,.066.536.127,1.037.189,1.537.013.1.037.2.041.3a.448.448,0,0,1-.352.491.439.439,0,0,1-.55-.336,11.586,11.586,0,0,1-.2-1.225,12.273,12.273,0,0,1,9.558-13.223,11.942,11.942,0,0,1,11.431,3.386,11.826,11.826,0,0,1,3.433,7.134,12.524,12.524,0,0,1-.129,3.8c-.063.349-.264.519-.558.479s-.423-.257-.377-.624c.07-.557.147-1.112.228-1.718h-1.135a2.363,2.363,0,0,1-.359-.009.459.459,0,0,1-.4-.51.435.435,0,0,1,.458-.419c.451-.008.9,0,1.4,0a11.1,11.1,0,0,0-1.271-4.788c-.381.218-.746.429-1.112.637-.328.186-.6.145-.747-.109s-.052-.516.271-.7c.365-.213.731-.423,1.111-.643a11.416,11.416,0,0,0-3.5-3.5c-.239.41-.463.8-.691,1.187a.415.415,0,0,1-.477.247.74.74,0,0,1-.385-.341.548.548,0,0,1,.073-.41C-1665.677-961.467-1665.451-961.837-1665.227-962.227Z" transform="translate(-23.601 -23.966)"/>
                        <path id="Path_6976" data-name="Path 6976" d="M-1554.57-928.7a2.766,2.766,0,0,1,.99-1.822.744.744,0,0,0,.221-.437c.157-1.577.3-3.155.44-4.733.062-.688.127-1.376.18-2.065a1,1,0,0,1,.985-.988,1,1,0,0,1,1.01.991c.116,1.349.248,2.7.37,4.046.082.908.164,1.817.236,2.726a.639.639,0,0,0,.227.473,2.7,2.7,0,0,1,.909,2.84,2.711,2.711,0,0,1-2.167,2.084A2.9,2.9,0,0,1-1554.57-928.7Zm2.828,2.224a1.874,1.874,0,0,0,1.886-1.871,1.9,1.9,0,0,0-1.885-1.91,1.9,1.9,0,0,0-1.886,1.881A1.872,1.872,0,0,0-1551.742-926.48Zm.044-11.3h-.088l-.6,6.6h1.293Z" transform="translate(-142.33 -47.799)"/>
                    </g>
                </svg>
                <div>
                    <span>Skrzynia</span>
                    <p><?php echo $opis['przyspieszenie']; ?></p>
                </div>
            </li>
        <?php endif; ?>
        </ul>
        <ul class="car-price">
            <li class="price">
            <?php if($prices['1-4_dni']) : ?>
                <p><?php echo $prices['1-4_dni']; ?> zł/dzień</p>
                <span>1-4 dni</span>
            <?php endif; ?>
            </li>
            <li class="price">
            <?php if($prices['5-14_dni']) : ?>
                <p><?php echo $prices['5-14_dni']; ?> zł/dzień</p>
                <span>5-14 dni</span>
            <?php endif; ?>
            </li>
            <li class="price">
            <?php if($prices['15+_dni']) : ?>
                <p><?php echo $prices['15+_dni']; ?> zł/dzień</p>
                <span>15+ dni</span>
            <?php endif; ?>
            </li>
            <li class="price">
            <?php if($prices['miesiac']) : ?>
                <p><?php echo $prices['miesiac']; ?> zł</p>
                <span>Miesiąć</span>
            <?php endif; ?>
            </li>
            <li class="price">
            <?php if($prices['kaucja']) : ?>
                <p><?php echo $prices['kaucja']; ?> zł</p>
                <span>Kaucja</span>
            <?php endif; ?>
            </li>
        </ul>
        <?php echo $infoPromo ? '<p class="info-promo">' . $infoPromo . '</p>' : false; ?>

    </div>
    <div class="content-price">
        <div class="content-price__wrap">
        <span>Cena już od:</span>
        <span class="price"><?php echo $priceFrom; ?></span>
        <span>Kaucja: <b><?php echo $kaucja; ?></b></span>
        <?php echo $dopisek;?>
        <a class="btn-revers btn--small js-poj" data-id="<?php the_ID(); ?>" href="http://localhost/globalelitecar/rezerwacja/">Zarezerwuj</a>
        
        <!-- <a class="read-more" href="<?php the_permalink(); ?>">Czytaj więcej</a> -->
        </div>
    </div>
</article>
