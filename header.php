<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
   <!-- <title><?php// wp_title('&laquo;',true,'right'); bloginfo('name'); ?></title>-->
   
   <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head()?>
    
    <!-- serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    
    <!-- sans-serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <!-- for social media icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
    <meta name="viewport" content="initial-scale=1">
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />	
</head>

<body id="top"<?php body_class(); ?>>
    <header> <!-- has no width, extends left and right forever -->
    
	<div id="masthead" class="wrapper940">
	    
	    <div class="social-media-icons wrapper940">
		<span class="fa-lg">
		
		<!--<a href="https://twitter.com/Earthship_SEA" target="_blank">
		    <i class="fa fa-twitter-square fa-1x" ></i>
		</a>-->
		
		<!--<a href="http://earthship-seattle.tumblr.com/" target="_blank">
		    <i class="fa fa-tumblr-square fa-1x"></i>
		</a>-->
		
		<a href="http://www.meetup.com/Earthship-Seattle/" target="_blank">
		    <i class="meetup fa fa-square fa-1x"></i>
		</a>
		
		<a href="https://www.facebook.com/EarthshipSeattle" target="_blank">
		    <i class="fa fa-facebook-square fa-1x"></i>
		</a>

		
		</span>
	    </div> <!-- end social-media-icons -->
	    
	    <div class="clear-fix">
		<a href="<?php echo get_option('home'); ?>/">
		    <img class="logo-header" src="<?php echo(get_header_image("<?php bloginfo('template_url'); ?>/images/logo.png"));?>"alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		    <h1 id="site-title">Earthship Seattle</h1>
		</a>
	    </div>
	    
	    <!-- From Giddy Throng Web 170 site: Begin Logo -->
                  <?php /* <h1>
                      <a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span>
                          <img src="<?php bloginfo('template_url'); ?>/images/logo-4-280x35px-white.png" width="280" height="35" id="logo" alt="<?php bloginfo('name'); ?>" />
                      </a>
                  </h1>
                  
                  <p  id="tagline"><?php bloginfo('description'); ?></p> */ ?>
                <!-- End Logo -->

	</div><!-- #masthead -->
	
    </header>
    
	<div id="nav-wide"> <!-- has no width, extends left and right forever -->
	    <nav id="nav-main" class="wrapper940 clear-fix">
		<?php wp_nav_menu( array( 
		    'theme_location' => 'main-menu' ,
		    'menu' => 'nav-main' ,
		    'container'  => 'ul', 
		));?>
		 <span class="search"><?php get_search_form(); /* outputs the default Wordpress search form */ ?></span>
	    </nav>
	</div> <!-- end nav-wide -->
    

    <!--<div id="wrapper">
	<div id="middle">
-->
