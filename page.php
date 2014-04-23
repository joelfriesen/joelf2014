<?php get_header(); ?>

<div id="content">
	<div class="container fourcol">
		<div  class="col">
			<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('page-sidebar-area') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col spanthree">
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
