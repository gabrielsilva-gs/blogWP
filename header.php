<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php if( is_404() ) echo 'Erro 404 - Isso non ecziste! | '; else wp_title( '|', true, 'right' ); ?>Blog do bielboyster</title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="/favicon.ico">>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-wrapper">
				<a style="float: left;" href="#">SOBRE</a>
				<a href="<?php bloginfo('url'); ?>"><img style="width: 184px; height: 24px;" src="<?php bloginfo('template_directory'); ?>/img/logo-menu.png"></a>
			</div>
		</div>