<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<div id="content">
	<div class="container col4">
		<div  class="col">
			<ul class="menu">
				<li>
					<?php previous_posts_link('Newer news'); ?>
					<?php next_posts_link('Older news'); ?>
				</li>
			</ul>
			<?php dynamic_sidebar('news-sidebar-area') ?>
		</div>
		<div class="col span3">
			<h2 class="indexintro">News</h2>
			<?php
			$catname = wp_title('', false);
			$new_query = new WP_Query();
			$new_query->query('category_name=news&posts_per_page=5'.'&paged='.$paged);
			global $more;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$more = 0; ?>
			<div class="contentcontainer threecol">
				<h3 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class=" col spantwo rowholder">
					<?php the_content('',TRUE,''); ?>
				</div>
				<div class="col">
					<?php  the_meta(); ?>
					<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>
					<a href="<?php the_permalink(); ?>" class="more-link">Read more</a> 
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			
			<?php next_posts_link('&laquo; Older Entries', $new_query->max_num_pages) ?>
			<?php previous_posts_link('Newer Entries &raquo;') ?>
			
			
			
			
			
		
			<div class="newsbuttons">
				<div class="alignleft menu"><?php previous_posts_link('Newer news'); ?></div>
				<div class="alignright menu"><?php next_posts_link('Older news'); ?></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>