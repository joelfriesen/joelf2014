<?php get_header(); ?>

<div id="nav">
	<div class="center">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</div>
</div>
<div id="content">
	<div class="center twocols">
		<div  class="rightcol">
			  <h2><?php _e('Oops! Page not found!'); ?></h2>
			  <p>I couldn't find any posts</p>
		</div>
		<div class="leftcol">
			<?php dynamic_sidebar('news-sidebar-area') ?>
		</div>
	</div>
</div>

<div id="footer">
	<div class="center">
		<?php dynamic_sidebar('footer')  ?>
	</div>
</div>
<?php get_footer(); ?>