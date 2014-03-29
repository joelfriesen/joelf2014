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
            }
            ?>  
		</div>
	</div>
 </div>
<?php get_footer(); ?>