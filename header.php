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
    
    <!-- serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>  
    
    <!-- sans-serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    
    <!-- for social media icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>

<body id="top"<?php body_class(); ?>>
    <header> <!-- has no width, extends left and right forever -->
    
	<div id="masthead" class="wrapper940">
	    
	    <div class="social-media-icons wrapper940">
		<span class="fa-lg">
		
		<a href="https://twitter.com/Earthship_SEA" target="_blank">
		    <i class="fa fa-twitter-square fa-1x" ></i>
		</a>
		
		<a href="https://www.facebook.com/EarthshipSeattle" target="_blank">
		    <i class="fa fa-facebook-square fa-1x"></i>
		</a>
		
		<a href="http://earthship-seattle.tumblr.com/" target="_blank">
		    <i class="fa fa-tumblr-square fa-1x"></i>
		</a> 
		
		</span>
	    </div> <!-- end social-media-icons -->
	    
	    <div class="clear-fix">
		    <img class="logo-header" src="<?php echo(get_header_image("<?php bloginfo('template_url'); ?>/images/logo.png"));?>"alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		    <a href="<?php echo get_option('home'); ?>/"><h1 id="site-title">Earthship<br>Seattle</h1></a>
	    </div>	

	</div><!-- #masthead -->
	
    </header>
    
	<div id="nav-wide"> <!-- has no width, extends left and right forever -->
	    <nav class="wrapper940 clear-fix">
		<?php wp_nav_menu( array( 
		    'theme_location' => 'main-menu' ,
		    'menu' => 'nav-main' ,
		    'container'  => 'ul', 
		));?>
		 <span class="search"><?php get_search_form(); /* outputs the default Wordpress search form */ ?></span>
	    </nav>
	</div> <!-- end nav-wide -->
    

    <div id="wrapper">
	<div id="middle">

