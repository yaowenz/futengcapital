<!DOCTYPE html>
<!--[if lt IE 10]><html <?php language_attributes(); ?> class="no-js ie-lt-10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js ie-gt-10"><!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" type='text/css' media='all' />
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">				
			<div class="site-title">
				<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img width="380" src="<?php echo get_template_directory_uri()?>/images/ft-logo.png"/></a>
			</div>					
		</div><!-- .site-branding -->
		<div id="primary-nav">
			<ul>
				<li><a href="#" title="公司简介"><img src="<?php echo get_template_directory_uri()?>/images/nav-about.png" /></a></li>
				<li class="sep"></li>
				<li><a href="#" title="业务模式"><img src="<?php echo get_template_directory_uri()?>/images/nav-business.png" /></a></li>
				<li class="sep"></li>
				<li><a href="#" title="投资项目"><img src="<?php echo get_template_directory_uri()?>/images/nav-projects.png" /></a></li>
				<li class="sep"></li>
				<li><a href="#" title="最新活动"><img src="<?php echo get_template_directory_uri()?>/images/nav-activities.png" /></a></li>
				<li class="sep"></li>
				<li><a href="#" title="加入我们"><img src="<?php echo get_template_directory_uri()?>/images/nav-join.png" /></a></li>
			</ul>	
		</div>
		<div id="links-sns">
			<ul>
				<li class="contact">联系我们</li>
				<li class="sns"><img src="<?php echo get_template_directory_uri()?>/images/icon-wx.png"></li>
				<li class="sns"><img src="<?php echo get_template_directory_uri()?>/images/icon-wb.png"></li>				
			</ul>
		</div>
	</header><!-- .site-header -->
	<div id="content" class="site-content">
