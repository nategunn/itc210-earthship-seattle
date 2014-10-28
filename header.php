<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head()?>
</head>

<body>
	<header id="masthead" >
		<h1><?php bloginfo('name')?></h1>
	</header><!-- #masthead -->
    <nav id="nav">
        <?php wp_nav_menu()?>
    </nav>
	<div id="main" class="site-main">
