<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
   <!-- <title><?php// wp_title('&laquo;',true,'right'); bloginfo('name'); ?></title>-->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head()?>
    
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'> <!-- Serif: PT Serif -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'> <!-- Sans: PT Sans -->
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'> <!-- Mono: PT Mono  | font-family: 'PT Mono', ;-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'> <!-- Sans: PT Sans Caption -->
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> <!-- Serif: PT Serif Caption  | font-family: 'PT Serif Caption', serif; ;-->
	
</head>

<body id="top">
    <div id="wrapper">
	<header id="masthead" >
        <h1>
                <img src="<?php echo(get_header_image('/images/logo.jpg'));?>"alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
                <span id="search"><?php get_search_form(); /* outputs the default Wordpress search form */ ?></span>
        </h1>

	</header><!-- #masthead -->
     <nav id="nav">
        <?php wp_nav_menu( array( 
            'theme_location' => 'main-menu' ,
            'menu' => 'nav-main' ,
            'container'  => 'ul', 
        ));?>

    </nav>


	<div id="main" class="site-main">

