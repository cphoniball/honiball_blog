<?php /*Template Name: Front page*/get_header(); ?>
<div id="content">
	<?php while ( have_posts() ) : the_post(); ?>		<?php the_content(); ?> 	<?php endwhile; ?> 
</div>
<?php get_footer(); ?>