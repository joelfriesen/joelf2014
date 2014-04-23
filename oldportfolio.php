<?php
/*
Template Name: Older Portfolio
*/
?>
<?php get_header(); ?>
<div id="content">
	<div class="container col4">
		<div  class="col">&nbsp;
			<?php dynamic_sidebar('portfolio-sidebar-area') ?>
		</div>
		<div class="col span3">
			<?php if (have_posts()) : ?>
			  <?php while (have_posts()) : the_post(); ?>
				<h2 class="indexintro"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div>
				  <?php the_content("more &gt;&gt;"); ?>
				</div>
				<?php comments_template(); ?>
			  <?php endwhile; ?>        
			<?php else : ?>
			  <h2><?php _e('Oops! Page not found!'); ?></h2>
			  <p>I couldn't find any posts</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>