<?php
$display = get_field( 'wlacz_cookies_bar', 'options' );
$info = get_field( 'info', 'options' );
$link = get_field('link_cookies', 'options');

if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>
<?php if($display == true) : ?>
<div class="header__cookis-bar js-cookies-bar">
    <div class="header__cookis-bar__wraper">
        <?php if($info): ?>
         <?php echo $info; ?>
        <?php endif; ?>
        <?php if($link ) : ?>
        <a class="btn btn--small" href="<?php echo esc_url( $link_url); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    <span class="close-button" onclick="closeModal()">&#x2716;</span>
</div>

<script>
    function showCookiesBanner() {
      const modal = document.querySelector(".js-cookies-bar");
      modal.style.display = "block";
      sessionStorage.setItem("cookiesBar", "yes");
    }
    function closeModal() {
      const modal = document.querySelector(".js-cookies-bar");
      modal.style.display = "none";
      sessionStorage.setItem("cookiesBar", "no");;
    }

    const cookiesBar =sessionStorage.getItem("cookiesBar");
    if (cookiesBar == 'yes' || !cookiesBar) {
      showCookiesBanner();
    }
</script>
<?php endif; ?>