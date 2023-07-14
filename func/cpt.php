<?php
function grant_init_posttypes()
{

    $recipes_args = array(

        'labels' => array(
            'name' => 'Pojazdy',
            'singular_name' => 'Pojazdy',
            'all_items' => 'Wszystkie pojazdy',
            'add_new' => 'Dodaj pojazd',
            'add_new_item' => 'Dodaj pojazd',
            'edit_item' => 'Edytuj pojazd',
            'new_item' => 'Nowy pojazd',
            'view_item' => 'Zobacz pojazdy',
            'search_items' => 'Szukaj',
            'not_found' =>  'Nie znaleziono',
            'not_found_in_trash' => 'Nie znaleziono w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 2,
        'supports' => array(
            'title', 'editor', 'comments', 'author',
        ),
        'has_archive' => true,
        'taxonomies'          => array('category')
    );
    function add_project_metaboxes()
    {
        add_meta_box('default');
    }
    register_post_type('pojazdy', $recipes_args);
}
add_action('init', 'grant_init_posttypes');



add_action( 'init', 'go_taxonomy_marka', 0 );  
function go_taxonomy_marka() {
  $labels = array(
    'name' => _x( 'Marki', 'go' ),
    'singular_name' => _x( 'Marki', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Marki' ),
  );    
  register_taxonomy('Marki',array('pojazdy'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    
    'rewrite' => array( 'slug' => 'marka' ),

  ));
}

add_action( 'init', 'go_taxonomy_model', 0 );  
function go_taxonomy_model() {
  $labels = array(
    'name' => _x( 'Modele', 'go' ),
    'singular_name' => _x( 'Modele', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Modele' ),
  );    
  register_taxonomy('Modele',array('pojazdy'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => false,
    // 'rewrite' => array( 'slug' => 'model' ),
  ));
}

add_action( 'init', 'go_taxonomy_typ', 0 );

function go_taxonomy_typ() {
  $labels = array(
    'name' => _x( 'Typ', 'go' ),
    'singular_name' => _x( 'Typ', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Typ' ),
  );    
  register_taxonomy('Typ',array('pojazdy'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
   'public' => false,
    'rewrite' => false,
    // 'rewrite' => array( 'slug' => 'typ' ),
  ));
}