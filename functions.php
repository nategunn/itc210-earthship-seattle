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

/*Add a custom size for images displayed in the mid-page widget area. */
add_image_size( 'mid-thumbnail', 300,200,true);


/* From Mike */
// Get Child Pages
function get_child_pages() {
global $post;
rewind_posts(); // stop any previous loops
query_posts(array('post_type' => 'page','numberposts' => -1,'post_status' => null,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages
if (have_posts()) : while (have_posts()) : the_post();
$childPermalink = get_permalink( $post->ID ); // post permalink
$childID = $post->ID; // post id
$childTitle = $post->post_title; // post title
$childExcerpt = $post->post_excerpt; // post excerpt
echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
echo '</article>';
endwhile; endif;
}
//