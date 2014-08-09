<?php get_header(); ?>
<div id="content">
	<div class="container col4">
		<div  class="col">
			<ul class="menu">
				<li>
					<?php previous_posts_link('Newer posts'); ?>
					<?php next_posts_link('Older posts'); ?>
				</li>
			</ul>
			<?php dynamic_sidebar('news-sidebar-area') ?>
		</div>
		<div class="col span3">
			<h2 class="indexintro">News</h2>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="contentcontainer col3">
				<h3 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>
				<div class=" col span2 rowholder">
					<?php the_time('F jS, Y') ?>
					<?php the_content('',TRUE,''); ?>
				</div>
				<div class="col">
					<?php if ( get_post_meta($post->ID, 'date', true) ) : ?>
					 
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" class="more-link">Read more</a> 
				</div>
				<?php else : ?>
					<?php the_time('F jS, Y') ?>
					<?php the_content('',TRUE,''); ?>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="newsbuttons container col3">
				<div class="alignleft menu col rowholder"><?php previous_posts_link('Newer posts'); ?></div>
				<div class="col">&nbsp;</div>
				<div class="alignright menu col "><?php next_posts_link('Older posts'); ?></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>