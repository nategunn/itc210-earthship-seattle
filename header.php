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
</head>

<body>
	<header id="masthead" >
		<h1><?php bloginfo('name')?></h1>
	</header><!-- #masthead -->
     <nav id="nav">
        <?php wp_nav_menu( /*array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' )*/)?>
    </nav>


	<div id="main" class="site-main">

