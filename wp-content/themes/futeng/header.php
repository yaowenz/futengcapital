<!DOCTYPE html>
<!--[if lt IE 10]><html <?php language_attributes(); ?> class="no-js ie-lt-10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js ie-gt-10"><!--<![endif]-->
<head>
	<title><?php $blogname = get_bloginfo('name'); $title = wp_title( '|', false, 'right' ); echo empty($title) ? $blogname : ($title . $blogname); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" type='text/css' media='all' />
	<link href="<?php echo get_template_directory_uri() . '/images/icon-logo.png'?>" rel="shortcut icon" />	
	<?php wp_head(); ?>
	<script type="text/javascript">
	jQuery(function($) {
		// 微信二维码
		jQuery('.sns-wx').hover(
				function() {					
					jQuery('#wx-floater').removeClass('hidden');
					jQuery('#wx-floater').addClass('animated fadeInUp');
				}, 
				function() {
					jQuery('.news-content').removeClass('animated fadeInUp');
					jQuery('#wx-floater').addClass('hidden');
				}
		);
	});	
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">				
			<div class="site-title">
				<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()?>/images/ft-logo.png"/></a>
			</div>					
		</div><!-- .site-branding -->
		<div id="primary-nav">
			<ul>
				<li class="nav-about"><a href="<?php echo site_url('about-futeng')?>" title="公司简介"><img src="<?php echo get_template_directory_uri()?>/images/nav-about.png" /></a></li>
				<li class="sep"></li>
				<li class="nav-business"><a href="<?php echo site_url('business')?>" title="业务模式"><img src="<?php echo get_template_directory_uri()?>/images/nav-business.png" /></a></li>
				<li class="sep"></li>
				<li class="nav-projects"><a href="<?php echo site_url('projects')?>" title="投资项目"><img src="<?php echo get_template_directory_uri()?>/images/nav-projects.png" /></a></li>
				<li class="sep"></li>
				<li class="nav-activities"><a href="<?php echo site_url('archives/category/activities')?>" title="最新活动"><img src="<?php echo get_template_directory_uri()?>/images/nav-activities.png" /></a></li>
				<li class="sep"></li>
				<li class="nav-join"><a href="<?php echo site_url('joinus')?>" title="加入我们"><img src="<?php echo get_template_directory_uri()?>/images/nav-join.png" /></a></li>
			</ul>	
		</div>
		<div id="links-sns">
			<ul>
				<li class="contact"><a href="<?php echo site_url('about-futeng#section-contact')?>">联系我们</a></li>
				<li class="sns sns-wx"><img src="<?php echo get_template_directory_uri()?>/images/icon-wx.png"></li>
				<li class="sns"><a href="http://weibo.com/futengcapital" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/icon-wb.png"></a></li>				
			</ul>
		</div>
		 <div id="wx-floater" class="hidden">
	    	<img width="150" src="<?php echo get_template_directory_uri()?>/images/wx.jpg" />
	    </div>  
	</header><!-- .site-header -->	
	<div id="content" class="site-content">
