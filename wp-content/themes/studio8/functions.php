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
?>