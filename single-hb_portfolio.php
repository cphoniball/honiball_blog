<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts() ) : the_post() ?>	
<div class="slideshow">		
	<div class="slides">
		<?php the_content(); ?> 		
	</div>
	<div class="controls">
		<a href="" class="slideControl prev"></a>
		<a href="" class="slideControl next"></a>
	</div>
</div> 
<?php endwhile; ?>
<?php endif; ?> 	
<?php get_footer(); ?>