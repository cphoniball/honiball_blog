<?php get_header(); ?><h2 class="centered" ><?php single_cat_title(); ?></h2> 
<div id="archive-content">
	<div id="masonry">
		<?php while ( have_posts() ) : the_post(); ?>	
			<?php if ( has_post_thumbnail() ) :?>
	 			<div class="archive-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
				</div> 		
			<?php endif; ?> 	
		<?php endwhile; ?>
	</div><!-- end masonry --> 
</div><!-- end archive-content --> 
<?php get_footer(); ?>