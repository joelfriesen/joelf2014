<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('primary-widget-area') ) : ?>
<?php endif; ?>