<?php
/*
Template Name: Portfolio
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
		<h2 class="indexintro">Portfolio</h2>
		 <?php
			 $the_query = new WP_Query( 'category_name=portfolio&posts_per_page=20' );
			 global $more;
			 while ( $the_query->have_posts() ) : $the_query->the_post();
			 $more = 0; ?>
			 <div class="contentcontainer">
				<h3 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="smallcontentbox">
					<?php the_content('',TRUE,''); ?>
				</div>
				<div class="metabox">
					<?php 
					$myid = $post->ID; 
					$data = $wpdb->get_results("
					SELECT * FROM $wpdb->postmeta WHERE post_id = $myid
					AND meta_key NOT LIKE '\_%'
					AND meta_key IN('code','design','site','platform','date')
					ORDER by meta_id ASC
					");
					
					if( !empty( $data ) ) {
						print '<ul class="post-meta">';
						foreach( $data as $result_object ) {
							print '<li><span class="post-meta-key">';
							print $result_object->meta_key;
							print '</span>: ';
							print $result_object->meta_value;
							print '</li>';
						}
						print '</ul>';
					}
					?>
					<?php if ($pos=strpos($post->post_content, '<!--more-->')): ?>
					<a href="<?php the_permalink(); ?>" class="more-link">Read more</a> 
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile;
			wp_reset_postdata(); ?>
		</div>
		<div class="leftcol">
			<?php dynamic_sidebar('portfolio-sidebar-area') ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
