<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<div id="content">
	<div class="container col4">
		<div  class="col">
			<?php dynamic_sidebar('about-sidebar-area') ?>
			<?php the_meta(); ?>
		</div>
		<div class="col span3">
			<?php if (have_posts()) : ?>
			  <?php while (have_posts()) : the_post(); ?>
				<h2 class="indexintro"><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
				</div>
			  <?php endwhile; ?>        
			<?php else : ?>
			  <h2><?php _e('Oops! Page not found!'); ?></h2>
			  <p>I couldn't find any posts</p>
			<?php endif; ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>
