<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'header',
        'title'             => __('Header'),
        'render_template'   => 'blocks/header/header.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'header' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-header',  get_template_directory_uri() . '/blocks/header/header.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 's-contact',
        'title'             => __('Widget Kontakt'),
        'render_template'   => 'blocks/s-contact/s-contact.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 's-contact' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-s-contact',  get_template_directory_uri() . '/blocks/s-contact/s-contact.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'seo-loadmore',
        'title'             => __('Seo - load more'),
        'render_template'   => 'blocks/seo-loadmore/seo-loadmore.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'seo-loadmore' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-seo-loadmore',  get_template_directory_uri() . '/blocks/seo-loadmore/seo-loadmore.min.css' );
          wp_enqueue_script('go-seo-loadmore-js', get_template_directory_uri().'/blocks/seo-loadmore/seo-loadmore.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 's-localization',
        'title'             => __('Widget Lokalizacja'),
        'render_template'   => 'blocks/s-localization/s-localization.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 's-localization' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-s-localization',  get_template_directory_uri() . '/blocks/s-localization/s-localization.min.css' );
      },
    ));
    acf_register_block_type(array(
      'name'              => 'btn',
      'title'             => __('Btn'),
      'render_template'   => 'blocks/btn/btn.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
    ));

    acf_register_block_type(array(
      'name'              => 'tytul',
      'title'             => __('Tytuł'),
      'render_template'   => 'blocks/tytul/tytul.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tytul' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-tytul',  get_template_directory_uri() . '/blocks/tytul/tytul.min.css' );
      },
    ));
    acf_register_block_type(array(
      'name'              => 'brands',
      'title'             => __('Marki - logotypy'),
      'render_template'   => 'blocks/brands/brands.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'brands' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-brands',  get_template_directory_uri() . '/blocks/brands/brands.min.css' );
      },
    ));

     acf_register_block_type(array(
      'name'              => 'cars',
      'title'             => __('Pojazdy'),
      'render_template'   => 'blocks/cars/cars.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'cars' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-cars',  get_template_directory_uri() . '/blocks/cars/cars.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'container',
      'title'             => __('Kontener'),
      'render_template'   => 'blocks/container/container.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
       'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> true,
          'jsx' 			=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'container' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-container',  get_template_directory_uri() . '/blocks/container/container.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'posts',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/posts/posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Posts' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posts',  get_template_directory_uri() . '/blocks/posts/posts.min.css' );
      },
    ));
    acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Slider home'),
      'render_template'   => 'blocks/hero/hero.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#e11f26',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'hero' ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-hero_init',  get_template_directory_uri() . '/blocks/hero/hero.js',  array(), '20130456', true );
          wp_enqueue_style( 'go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css' );
      },
    )); 
     acf_register_block_type(array(
        'name'              => 'tabs',
        'title'             => __('Taby'),
        'render_template'   => 'blocks/tabs/tabs.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tabs' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-tabs',  get_template_directory_uri() . '/blocks/tabs/tabs.min.css' );
          wp_enqueue_script('go-tabs-js', get_template_directory_uri().'/blocks/tabs/tabs.js', array( 'jquery' ),'4', true );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'lokalizacja',
        'title'             => __('Lokalizacje + mapa'),
        'render_template'   => 'blocks/lokalizacja/lokalizacja.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'lokalizacja' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-lokalizacja',  get_template_directory_uri() . '/blocks/lokalizacja/lokalizacja.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'cennik',
        'title'             => __('Cennik'),
        'render_template'   => 'blocks/cennik/cennik.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e11f26',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'cennik' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_script('go-datatable', 'https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',  array(), '201304510', true );
        // wp_enqueue_script('go-datatableresponsive', 'https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js',  array(), '201304510', true );
        wp_enqueue_style( 'go-datatable-css', 'https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css' );
	      // wp_enqueue_style( 'go-datatableresponsive', 'https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css' );
        wp_enqueue_style( 'go-cennik',  get_template_directory_uri() . '/blocks/cennik/cennik.min.css' );
        wp_enqueue_script('go-cennik', get_template_directory_uri().'/blocks/cennik/cennik.js', array( 'jquery' ),'4', true );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
