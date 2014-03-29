<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<div id="nav">
	<div class="center">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</div>
</div>
<div id="content">
	<div class="center twocols">
		<div  class="rightcol">
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
		<div class="leftcol">
			<?php dynamic_sidebar('about-sidebar-area') ?>
			<?php the_meta(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>