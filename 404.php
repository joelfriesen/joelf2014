<?php get_header(); ?>

<div id="content">
	<div class="container fourcol">
		<div  class="col">
			<?php dynamic_sidebar('news-sidebar-area') ?>
		</div>
		<div class="col spanthree">
			<h2><?php _e('Oops! Page not found!'); ?></h2>
			<p>I couldn't find any posts</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>