<?php 
function theme_register_menus() {
register_nav_menus(
array(
'menu-header' => __( 'Menu Header', '' ),
'menu-footer' => __( 'Menu Footer', '' ),
)
);
}
add_action( 'init', 'theme_register_menus' );

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

?>