<?php
// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');



//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array( 
		  'main-menu' => __( 'nav-main' ) 
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}


// Add custom menus to Dashboard when theme is active   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu' //Main Menu is the name of the registered location as it appears in the dashboard

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
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	
	/* Register the footer widget area. */
	register_sidebar(
		array(
			'id' => 'foot',
			'name' => __( 'Footer Widget Area' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
}

?>