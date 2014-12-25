<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
   
<title><?php get_my_title_tag(); ?></title>
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
   
   <!-- Remy Sharp Shim --> 
   <!--[if lt IE 9]> 
   <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
   <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $(function() {
            var pull        = $('#pull');
            menu        = $('#nav-main ul');

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });
        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head()?>
    
    <!-- serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
   
    <!-- sans-serifs -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <!-- for social media icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
    <meta name="viewport" content="initial-scale=1">
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />	
</head>


<body id="top" <?php body_class(); ?>>
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
			<i class="meetup fa fa-users fa-1x"></i>
		    </a>
		    
		    <a href="https://www.facebook.com/EarthshipSeattle" target="_blank">
			<i class="fa fa-facebook-square fa-1x"></i>
		    </a>

		</span>
	    </div> <!-- end social-media-icons -->
	    
	    <div class="clear-fix">
		<a href="<?php echo get_option('home'); ?>/">
		    <img class="logo-header" src="<?php echo(get_header_image("<?php bloginfo('template_url'); ?>/images/logo.png"));?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		    <h1 id="site-title">Earthship Seattle</h1>
		</a>
	    </div>
                  
                <?php /*  <p  id="tagline"><?php bloginfo('description'); ?></p> */ ?>

	</div><!-- #masthead -->
	
    </header>
    
	<div id="nav-wide"> <!-- has no width, extends left and right forever -->
	    <nav id="nav-main" class="wrapper940 clear-fix">
		<?php wp_nav_menu( array( 
		    'theme_location' => 'main-menu' ,
		    'menu' => 'nav-main' ,
		    'container'  => 'ul', 
		));?>
            <div class="search-bar"><?php get_search_form(); /* outputs the default Wordpress search form */ ?></div>
            <a href="#" id="pull">.</a>
	    </nav>
	</div> <!-- end nav-wide -->
    