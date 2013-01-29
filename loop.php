<?php if ( !have_posts() ) : ?>
	<div id="post-0">
		<h1>Error - page not found</h1>
	</div>  
<!-- Main wordpress loop here -->
<?php elseif ( ( have_posts() &&  is_home() ) ) :	while ( have_posts() ) : the_post(); ?>
		<div class="post home" id="<?php the_ID(); ?>">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-meta">Published in <?php the_category( ',' ); ?>  on <?php the_date( 'F j, Y g:i a' )?></p>
			<?php the_content(); ?> 
			<p class="read-more"><a href="<?php the_permalink(); ?>">Go to post &raquo;</a></p>
			<hr />
		</div> <!-- end post --> 
	<?php endwhile; ?>
<!-- loop for single blog post pages --> 
<?php elseif ( have_posts() && is_single() ) : ?>
	 <?php while ( have_posts() ) : the_post(); ?>
		<div class="post" id="<?php the_ID(); ?>">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-meta">Published in <?php the_category( ',' ); ?>  on <?php the_date( 'F j, Y g:i a' )?></p>
			<?php the_content(); ?>
			<hr />
		</div> <!-- end post --> 
	<?php endwhile; ?> 
 	<div id="comment-section">
 		<?php if ( comments_open() ) : 
			comments_template( '', true ); 
		endif; ?> 
	</div> <!-- end comment section-->  
<?php elseif ( is_page() ) : ?>
	 <?php while ( have_posts() ) : the_post(); ?>
	 	 <div class="post" id="<?php the_ID(); ?>">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
		</div> <!-- end post --> 
	<?php endwhile; ?> 	
<?php elseif ( is_category() || is_search() ) : ?>
	<?php if ( have_posts() ) : ?> 
		<?php while ( have_posts() ) : the_post(); ?>
			  <div class="post home" id="<?php the_ID(); ?>">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-meta">Published in <?php the_category( ',' ); ?>  on <?php the_date( 'F j, Y g:i a' )?></p>
				<?php if ( catch_that_image() != false ) :  
					echo '<img src="';
					echo catch_that_image();
					echo '" alt="" />';
		 		endif; ?> 
				<div class="the-excerpt"><?php the_excerpt(); ?></div>
				<p class="read-more"><a href="<?php the_permalink(); ?>">Go to post &raquo;</a></p>
				<hr />
			</div> <!-- end post --> 
		<?php endwhile; ?>
	<?php else : ?>
	  	<div id="post-0">
			<h1>Sorry, no posts found.</h1>
		</div>
	<?php endif; ?> 
<?php else : ?>
	<div id="post-0">
		<h1>Error - page not found</h1>
	</div>
<?php endif; ?>