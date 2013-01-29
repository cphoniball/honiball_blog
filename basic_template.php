<!DOCTYPE html>

<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php 
    //changing title for different sections on site
    if ( is_home() ) {
    	bloginfo( 'name' );
    } elseif ( is_category() || is_tag() ) {
		single_cat_title(); 
		echo ' &bull; ' ;
		bloginfo( 'name' ); 
    } elseif ( is_single() || is_page() ) {
    	single_post_title();
    } else {
    	wp_title( '', true);
    } ?></title>

    <!-- Include main and reset css sheets -->  
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet' ); ?>" />
     
    <!-- google fonts includes -->
    <link href='http://fonts.googleapis.com/css?family=Vollkorn&v1' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Brawler&v1' rel='stylesheet' type='text/css'>
	
     <!--Include jquery-->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
     <script src="scripts/script.js"></script>
	
	<!-- HTML5shiv --> 
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?> 
	
	<div id="container">
		
		<header>
			
			<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
 			<nav id="top-nav">
				<?php wp_nav_menu( array(
					'theme-location' => 'top-nav',
					'container' => 'ul',
					'container_id' => 'top-nav', 
				) ); ?> 
			</nav>
			
			<div class="cBoth"><!-- --></div>
			
			<nav id="bottom-nav">
				<?php wp_nav_menu( array( 
					'theme-location' => 'bottom-nav',
					'container' => 'ul',
					'container_id' => 'bottom-nav',
				 ) ); ?> 
			</nav>
			
			<form action="submit">
				<input id="search" type="text" placeholder="Search here..."/>
			</form>
			
		</header>
		
		<div class="cBoth"><!-- --></div>
		
		<!-- holds the posts, or the loop on other pages --> 
		<div id="content">
			
			<!-- this is gonna be the loop here, yo --> 
			
		</div> <!-- end content --> 
		
		<ul id="sidebar">
			<?php if ( ! (dynamic_sidebar( 'sidebar' ) ) : ?> 
				<p>Go to the admin page and enter some widgets here please</p>
			<?php endif; ?>
			<?php dynamic_sidebar( 'sidebar' ); ?>  
		</ul> <!-- end sidebar --> 
		
		<div class="cBoth"><!-- --></div>
		
		<footer>
			<ul id="footer-widgets">
			<?php if ( ! (dynamic_sidebar( 'footer-widgets' ) ) : ?> 
				<p>Go to the admin page and enter some widgets here please</p>
				<?php endif; ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</ul> 
		</footer>
		
</div> <!-- end container --> 

</body>

</html>