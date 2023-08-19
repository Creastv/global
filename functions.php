<?php
add_theme_support('post-thumbnails');
add_image_size( 'post', 670, 377, array( 'center', 'center' ) );
add_image_size( 'post-car', 300, 220, array( 'center', 'center' ) );
add_image_size( 'table', 150, 150 );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
			'secundary_menu' => __( 'footer Menu', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}

function go_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar - default page', 'go' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="calaps widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'go_widgets_init' );

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';
require get_template_directory() . '/blocks/blocks.php';

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/go-admin.min.css');
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}

// colors
function ka_override_MCE_options($init)
  {
    $custom_colors = '
          "e11f26", "Main color",
          "111111", "Main 2 color",
          "7b7b7b", "Main 3 color",
          "dfdfdf", "Black",
          "545454", "Light black",
          "#f2f2f2", "Gray",
          "d7d7d7", "Gary dark",
      ';
    // build color grid palette
    $init['textcolor_map'] = '[' . $custom_colors . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
  }
  add_filter('tiny_mce_before_init', 'ka_override_MCE_options');

// Excerpt changing 3 dots
  Function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Globalelitecar settings',
    'menu_title' => 'Globalelitecar settings',
    'parent_slug' => 'themes.php',
  ));
}

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q');
}
add_action('acf/init', 'my_acf_init');


// Tryb warunkowy cpt
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
}


// Dodanie zdecia wyrózniającego dla postów w tabeli
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);
add_filter('manage_pages_custom_column', 'manage_img_column', 10, 2);
  
function add_img_column($columns) {
$columns = array_slice($columns, 0, 1, true) + array("links" => "Image") + array_slice($columns, 1, count($columns) - 1, true);
return $columns;
}
  
function manage_img_column($column_name, $post_id) {
if( $column_name == 'links' ) {
$image = get_field('zdjecie', $post_id);
if( $image ) {
  echo wp_get_attachment_image( $image, 'thumbnail' );
} else {
  echo get_the_post_thumbnail($post_id, 'thumbnail');
}
}
return $column_name;
}

// Filter, set all posts

function filter_function_name( $query_args, $sfid ) {
  if($sfid==2059) {
    if(isset($_COOKIE['resultsDisplay'])) :
    $query_args['posts_per_page'] = -1;
    endif;
    
  }
  return $query_args;
}
add_filter( 'sf_edit_query_args', 'filter_function_name', 20, 2 );


function remove_home_category( $query ) {
    // if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-12' );
    // }
}
add_action( 'pre_get_posts', 'remove_home_category' );


