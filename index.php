<?php get_header(); ?>
<?php get_sidebar(); ?> 
<div id="content">
	<?php get_template_part( 'loop' ) ?>
</div>
<div class="prev-posts"><?php previous_posts_link(); ?></div>
<div class="next-posts"><?php next_posts_link(); ?></div>
<?php get_footer(); ?>