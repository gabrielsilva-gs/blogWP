<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,900,400italic,400,300,500italic,700italic,700,500,900italic' rel='stylesheet' type='text/css'>
		<script>
 			 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-50642794-1', 'bielboyster.com');
  			ga('require', 'displayfeatures');
  			ga('require', 'linkid', 'linkid.js');
  			ga('send', 'pageview');
		</script>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php if( is_404() ) echo 'Erro 404 - Isso non ecziste! | '; else wp_title( '|', true, 'right' ); ?>Blog do bielboyster</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="/favicon.ico">
		<?php wp_enqueue_script('jQuery'); ?>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-wrapper">
				<a style="float: left;" href="#">SOBRE</a>
				<a href="<?php bloginfo('url'); ?>"><img style="width: 184px; height: 24px;" src="<?php bloginfo('template_directory'); ?>/img/logo-menu.png"></a>
			</div>
		</div>AAAAAAAAAAAAAA