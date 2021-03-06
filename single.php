<?php get_header(); ?>
<div id="content">
	<div class="container col4">
		
		<div  class="col">
			<?php dynamic_sidebar('news-sidebar-area') ?>
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
			} else {
				print '<div class="menu-portfoliomenu-container">';
				print '<ul id="menu-portfoliomenu" class="menu">';
				print '<li id="first-menu-item-482" class="menu-item">';
				next_post_link('%link', 'Next post', TRUE);
				print '</li>';
				print '<li id="menu-item-697" class="menu-item">';
				previous_post_link('%link', 'Previous post', TRUE); 
				print '</li></ul></div>';
				
			}

			?>
		</div>
		<div class="col span3">
			<?php if (have_posts()) : ?>
			  <?php while (have_posts()) : the_post(); ?>
				<h2 class="indexintro"><?php the_title(); ?></h2>
				<div>
				  <?php the_content(); ?>
				</div>
			  <?php endwhile; ?>
			<?php if ( in_category( 'portfolio' )){
			   
			} else { comments_template(); }
			?>
			<?php else : ?>
			  <h2><?php _e('Oops! Page not found!'); ?></h2>
			  <p>I couldn't find any posts</p>
			<?php endif; ?>
		</div>
	</div>

</div>
<?php get_footer(); ?>