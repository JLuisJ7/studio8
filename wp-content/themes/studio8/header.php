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


<link rel='stylesheet' id='Open+Sans:100,300,n,i,b,bi,-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A100%2C300%2Cn%2Ci%2Cb%2Cbi%2C&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='Montserrat:100,300,n,i,b,bi,-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A100%2C300%2Cn%2Ci%2Cb%2Cbi%2C&#038;ver=4.1.1' type='text/css' media='all' />

<link rel='stylesheet' id='ot-dynamic-sbwp_custom_css-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/dynamic.css' type='text/css' media='all' />

<link rel='stylesheet' id='stylesheet-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='fa-css'  href='<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css' type='text/css' media='all' />

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
<?php wp_head(); ?>