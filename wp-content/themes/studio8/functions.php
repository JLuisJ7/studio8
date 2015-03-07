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
?>