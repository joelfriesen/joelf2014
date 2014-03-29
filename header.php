<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
  
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?><?php bloginfo('name'); ?></title>
  <meta name="author" content="Designed by Joel Friesen">

  <!-- Mobile and IE Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
  <!-- Favicons
  ================================================== -->
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon-160x160.png" sizes="160x160" />
  <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"><![endif]-->
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/images/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/images/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/images/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/images/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/images/mstile-310x310.png" />
  
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli|Raleway:100">
	
  
  <!-- JQuery, analytics and scripts
  ================================================== -->   
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/uniform.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancysettings.js"></script>
  <!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <script type="text/javascript">var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-213301-1']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body>
  <div id="logo">
    <div class="center">
      <h1><a href="<?php bloginfo('url'); ?>"><span class="blue">Joel</span> <span class="orange">Friesen</span></a></h1>
      <h2 class="grey">
        <?php bloginfo('description'); ?>
      </h2>
      <p class="tagline">A one-man web design shop specializing in small and medium sized businesses.</p>
    </div>
  </div>