<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en-US" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="en-US" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="en-US" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> 
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title> <?php if (is_front_page()) {bloginfo('name'); }else{wp_title(''); }?></title>
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.png"/>

<!--[if IE]>
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.png"/>
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="<?php bloginfo('template_url'); ?>/js/xit8ted.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<link rel='stylesheet' id='Open+Sans:100,300,n,i,b,bi,-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A100%2C300%2Cn%2Ci%2Cb%2Cbi%2C&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='Montserrat:100,300,n,i,b,bi,-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A100%2C300%2Cn%2Ci%2Cb%2Cbi%2C&#038;ver=4.1.1' type='text/css' media='all' />

<link rel='stylesheet' id='ot-dynamic-sbwp_custom_css-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/dynamic.css' type='text/css' media='all' />

<link rel='stylesheet' id='stylesheet-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='fa-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css' type='text/css' media='all' />
<?php wp_head(); ?>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jwplayer.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/plugins.js'></script>


<style>

/* Global para el menu
/***************************************************************/
.wrap {
	max-width: 1320px;
}
.curtain-top,
.curtain-bottom {
    height: 12px;
}
.curtain-right,
.curtain-left {
    width: 12px;
}
.curtain-top,
.curtain-bottom,
.curtain-right,
.curtain-left {
	background: #ffffff;
}
.overlay {
	padding: 12px 0px 12px;
}
.overlay-close {
	top: 12px;
}
.header {
	top: 12px;
}
.header .wrap, .header .brand {
	height: 75px;
	line-height: 75px;
}
.header .brand {
	margin-top: 0px;
	margin-bottom: 0px;
}
.mobile-trigger {
	line-height: 75px;
}
nav.mobile {
	top: 75px;
	padding: 0px 12px;
}
.header .nav a:after, .header ul.sub-menu, .header ul.children {
	top: 75px;
}
body.curtain-on #container {
	margin-top: 12px;
}
body.blog #container, body.archive #container, body.inverted .top-header {
	padding-top: 87px;
}
body.normal .page-header, body.page-template-page-fullwidth-php.normal #container {
	padding-top: 75px;
}
#contactMapHolder {
	padding: 0px 12px;
}
body.inverted #contactMapHolder {
	padding: 12px 12px 0px;
}
.footer {
	margin-bottom: 12px;
}
</style>

</head>

<?php if (is_home()): ?>
<body class="home page page-id-7 page-template page-template-page-slider page-template-page-slider-php inverted curtain-on mobile iphone">	
<?php elseif (is_search()): ?>
<body class="search search-results normal curtain-on desktop pace-done">
<?php elseif (is_single()): ?>
<body class="single single-post postid-551 single-format-standard normal curtain-on desktop">
<?php elseif (is_404()): ?>
<body class="error404 normal curtain-on desktop pace-done">
<?php else : ?>
<body class="page page-id-612 page-parent page-template page-template-page-fullwidth page-template-page-fullwidth-php normal curtain-on desktop">
<?php endif ?>


	<div class="overlay-target">
<?php if (is_home()): ?>
	<header class="header scroll inverted" role="banner">

			<div class="wrap cf">

				<div class="brand">
										<a href="http://themes.simonbouchard.com/studio8" title=""><img class="normal" src="http://themes.simonbouchard.com/studio8/wp-content/themes/studio8/library/images/logo.png" alt="" /><img class="inverted" src="http://themes.simonbouchard.com/studio8/wp-content/themes/studio8/library/images/logo_inverted.png" alt="" /></a>
				</div>

				<nav class="secondary" role="navigation">
					<ul id="menu-secondary-navigation" class="nav cf"><li id="menu-item-1397" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1397"><a href="https://twitter.com/simonbouchard"><i class="fa fa-twitter"></i></a></li>
<li id="menu-item-1415" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1415"><a href="#search"><i class="fa fa-search"></i></a></li>
</ul>				</nav>

				<nav class="primary" role="navigation">
					
					<?php wp_nav_menu(array('theme_location' => 'menu-header','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-main-navigation" class="nav cf">%3$s</ul>',)); ?>
					</nav>

				<nav class="mobile">
					<?php wp_nav_menu(array('theme_location' => 'menu-header','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-main-navigation-1" class="mobile">%3$s</ul>',)); ?>
				</nav>

				<div class="mobile-trigger"><span><i class="fa fa-lg fa-bars"></i></span></div>

			</div>

		</header>
<?php else : ?>
<header class="header scroll normal animated headroom--top slideDown" role="banner">

			<div class="wrap cf">

				<div class="brand">
										<a href="http://themes.simonbouchard.com/studio8" title=""><img class="normal" src="http://themes.simonbouchard.com/studio8/wp-content/themes/studio8/library/images/logo.png" alt=""><img class="inverted" src="http://themes.simonbouchard.com/studio8/wp-content/themes/studio8/library/images/logo_inverted.png" alt=""></a>
				</div>

				<nav class="secondary" role="navigation">
					<ul id="menu-secondary-navigation" class="nav cf"><li id="menu-item-1397" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1397"><a href="https://twitter.com/simonbouchard"><i class="fa fa-twitter"></i></a></li>
<li id="menu-item-1415" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1415"><a href="#search"><i class="fa fa-search"></i></a></li>
</ul>				</nav>

				<nav class="primary" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'menu-header','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-main-navigation" class="nav cf">%3$s</ul>',)); ?>
				</nav>

				<nav class="mobile">
					<?php wp_nav_menu(array('theme_location' => 'menu-header','menu_id' => 'menu', 'menu_class' => 'eleven columns','container' => '','items_wrap'      => '<ul id="menu-main-navigation-1" class="mobile">%3$s</ul>',)); ?>					
				</nav>

				<div class="mobile-trigger"><span><i class="fa fa-lg fa-bars"></i></span></div>

			</div>

		</header>

<?php endif ?>
<div id="container" class="m-all t-all d-all">

		