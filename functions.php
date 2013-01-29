<?php 
//----------------------------------------------
//Adding general theme support options
//----------------------------------------------
//localization suppport
load_theme_textdomain( 'honiball-blog', TEMPLATEPATH . '/lang' );add_theme_support( 'menus' );add_theme_support( 'post-thumbnails' );
//--------------------------
//Registering widget areas
//--------------------------
//sidebar widgets
register_sidebar( array(
	'name' => __( 'Sidebar Widget Area ', 'honiball-blog' ),
	'id' => 'sidebar',
	'description' => 'Widget area in the sidebar.',
	'before_title' => '<h3>',
	'after_title' => '</h3>',	
) );
//footer widgets
register_sidebar( array(
	'name' => __( 'Footer Widget Area ', 'honiball-blog' ),
	'id' => 'footer-widgets',
	'description' => 'Widget area in the sidebar.',
	'before_title' => '<h3>',
	'after_title' => '</h3>',	
) );
//tells theme to execute the my_menus function
//registering support for custom navigation menu
register_nav_menu( 'header', 'Header Navigation' ); 

register_sidebar( array(
	'name' => 'Header Menu',
	'id' => 'header-menu',
	'before_title' => '<a href="#" class="header-item">',
	'after_title' => '</a>'
) );

add_filter( 'wp_page_menu', 'my_page_menu' );

function my_page_menu( $menu ) {
	dynamic_sidebar( 'header-menu' );
}

//gets the first image in a post 
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    return false;
  }
  return $first_img;
}


//---------------------------------------------
//adding a custom post type for fullwidth pages
//---------------------------------------------
add_action( 'init', 'create_portfolio' );
function create_portfolio() {
	register_post_type( 'hb_portfolio',
		array(
			'labels' => array( 'name' => 'Portfolio Pages', 'singular-name' => 'Portfolio Page' ),
			'public' => true,
			'rewrite' => array( 'slug'=> 'portfolio' ),
			'description' => 'For portfolio pages.',
			'menu_position' => 5,	
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
			'taxonomies' => array( 'category', 'post_tag'),
		)
	);
}
//and making sure that that custom post type displays on the home page
add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
	if ( ( is_home() || is_category() || is_archive() ) && false == $query->query_vars['suppress_filters'] )
		 $query->set( 'post_type', array( 'post', 'hb_full-width', 'attachment' ) );
	return $query; 
}