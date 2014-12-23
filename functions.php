<?php
// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');


//add support for custom headers
$args = array(
    'flex-width'    => true,
    'width'         => 177,
    'flex-height'   => true,
    'height'        => 100,
    'default-image' => get_template_directory_uri() . '/images/logo.jpg',
    'uploads'       => true,
);

add_theme_support( 'custom-header', $args );



//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array( 
		  'main-menu' => __( 'nav-main' ), 
		  'events-menu' =>__( 'primary'),
		  'projects-menu'=>__( 'primary'),
		  'footer-menu' =>__( 'footer-menu' ),
		  'footer-button-menu' =>__( 'footer-button-menu' ) 
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}


// Add custom menus to Dashboard when theme is active   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu', //Main Menu is the name of the registered location as it appears in the dashboard
		  'events-menu' => 'Events Menu',
		  'projects-menu' => 'Projects Menu',
		  'footer-menu' => 'Footer Menu',
		  'footer-button-menu' => 'Footer Button Menu'
			 )
	);
}    

add_action( 'widgets_init', 'my_register_sidebars' );



function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	
	/* Register the mid-page widget area. */
	register_sidebar(
		array(
			'id' => 'mid-page',
			'name' => __( 'Mid-Page Widget Area' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the lower-page widget area. */
	register_sidebar(
		array(
			'id' => 'lower-page',
			'name' => __( 'Lower-Page Widget Area' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
}

/* Adding Theme Support - Post Thumbnails */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies


/* Add Custom Size Images */
add_image_size('blog-220px-width', 220); /* 220 px width and unlimited height */
add_image_size('home-300px-width', 300); /* 300 px width and unlimited height */

add_image_size('blog-220xauto', 220, auto); /* 220 px width and auto height */
add_image_size('home-300xauto', 300, auto); /* 300 px width and auto height */

add_image_size('home-300x200px-cropped', 300,200,true); /* crops image to 300 x 200 px */
/* End Adding Theme Support - Post Thumbnails */

// Get My Title Tag
function get_my_title_tag() {
  global $post;
    if ( is_front_page() ) { // for the siteÕs Front Page
    bloginfo('description'); // retrieve the site tagline
    }
    elseif ( is_page() || is_single() ) { // for your siteÕs Pages or Postings
    the_title(); // retrieve the page or posting title
    }
    else { // for everything else
    bloginfo('description'); // retrieve the site tagline
    }
    if ( $post->post_parent ) { // for your siteÕs Parent Pages
    echo ' | '; // separator with spaces
    echo get_the_title($post->post_parent); // retrieve the parent page title
    }
  echo ' | '; // separator with spaces
  bloginfo('name'); // retrieve the site name
  echo ' | '; // separator with spaces
  echo 'Seattle, WA'; // write in the location
}
//


?>




