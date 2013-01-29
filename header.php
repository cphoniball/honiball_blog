<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php //changing title for different sections on site
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
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' )?>/reset.css" />
	<link href='http://fonts.googleapis.com/css?family=Rokkitt|Unna' rel='stylesheet' type='text/css'> <!-- google fonts include --> 
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/flexslider.css" />    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />     
	<!-- HTML5shiv --> 
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]--><!-- Google analytics -->
	<link rel="icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico" />

<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24655257-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>	
<!--Include jquery and scripts file -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/scripts/script.js"></script>
<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?> onload="parent.postMessage(document.body.scrollHeight, 'http://localhost:8888/iframetest/index.php');">
	<header>
			<a href="<?php bloginfo( 'url' ); ?>"><img id="logo" src="<?php bloginfo ( 'template_url' ); ?>/img/logo.png" alt="logo"/></a>
			<div class="socialmedia">
				<a href="http://www.facebook.com/pages/Honiball-Photography/160226470670557"><img src="<?php bloginfo( 'template_url' )?>/img/facebook.png"></a>
				<a href="http://twitter.com/cphoniball"><img src="<?php bloginfo( 'template_url' )?>/img/twitter.png"></a>
				<a href="http://www.flickr.com/photos/cphoniball/"><img src="<?php bloginfo( 'template_url' )?>/img/flickr.png"></a>
				<a href="<?php bloginfo( 'url'); ?>/rss"><img src="<?php bloginfo( 'template_url' )?>/img/rss.png"></a>				
			</div>
			<nav>
				<ul>
					<?php wp_page_menu(); ?>
				</ul>
			</nav>
			<div class="cBoth"><!-- --></div>
		</header>
		<?php if ( get_post_type() != 'hb_portfolio' ) : ?> 
	<div id="container">
		<?php endif; ?> 
		<div class="cBoth"><!-- --></div>