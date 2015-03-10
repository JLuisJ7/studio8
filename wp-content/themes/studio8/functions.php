<?php 
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

function theme_register_menus() {
register_nav_menus(
array(
'menu-header' => __( 'Menu Header', '' ),
'menu-footer' => __( 'Menu Footer', '' ),
)
);
}
add_action( 'init', 'theme_register_menus' );

//--------------------widget support----------------------------------------
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=>__('Primary Sidebar','primary-sidebar'),
		'description'=>__('the primary widget area','dir'),
		'before_widget'=>'<div class="widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
		));
	register_sidebar(array(
		'name'=>__('Secondary Sidebar','secondary-sidebar'),
		'description'=>__('the secondary widget area','dir'),
		'before_widget'=>'<div class="widget">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
		));
}


//--------------------pagination function----------------------------------------
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
 
  if (empty($pagerange)) {
    $pagerange = 2;
  }
 
  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }
 
  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);
  
  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }
 
}

/*-----------------------------------------------------------------------------------*/
/*  Custom Post Types & Taxonomies
/*-----------------------------------------------------------------------------------*/

add_action( 'init', 'wpex_create_post_types' );
function wpex_create_post_types() {
  //exposicion post type
  register_post_type( 'Portafolio',
    array(
      'labels' => array(
      'name' => __( 'Portafolio', 'workz' ),
      'singular_name' => __( 'portafolio', 'workz' ),    
      'add_new' => _x( 'Agregar portafolio', 'portafolio', 'workz' ),
      'add_new_item' => __( 'Agregar nuevo portafolio', 'workz' ),
      'edit_item' => __( 'Editar portafolio', 'workz' ),
      'new_item' => __( 'Nuevo portafolio Project', 'workz' ),
      'view_item' => __( 'Ver portafolio', 'workz' ),
      'search_items' => __( 'Buscar portafolio', 'workz' ),
      'not_found' =>  __( 'No se encontraron portafolios', 'workz' ),
      'not_found_in_trash' => __( 'No se econtraron portafolios en la papelera', 'workz' ),
      'parent_item_colon' => ''
      
      ),
      'public' => true,
      'supports' => array('title','editor','thumbnail','tags'),
      'query_var' => true,
      'rewrite' => array( 'slug' => 'portafolio' ),/*
      'menu_icon' => get_bloginfo('template_url').'/images/icons/agregar_icon.png',*/
     
    )   
    );
}

/*-----------------------------------------------------------------------------------*/
/*  Soupport par excerpt
/*-----------------------------------------------------------------------------------*/
add_post_type_support('page', 'excerpt');
 remove_filter('the_excerpt', 'wpautop');

//Buscar sólo posts o entradas
function buscador_mostrar_solo_posts($query)
{
if ($query->is_search)
{
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts', 'buscador_mostrar_solo_posts');

?>
