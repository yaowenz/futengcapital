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
		cbpHorizontalMenu.init();
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
		<div id="primary-nav" class="cbp-hrmenu">
			<ul>
				<li class="nav-about">
					<a href="<?php echo site_url('about-futeng')?>" title="集团介绍"><img src="<?php echo get_template_directory_uri()?>/images/nav-about.png" /></a>
					<div class="cbp-hrsub">
						<div class="cbp-hrsub-inner"> 
							<div>			
								<!-- <h4>FUTENG CAPITAL</h4> -->					
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('about-futeng#about')?>">公司介绍</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('about-futeng#culture')?>">企业文化</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('about-futeng#partners')?>">合作机构</a></li>
								</ul>
							</div>							
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
				<li class="sep"></li>
				<li class="nav-business">
					<a href="<?php echo site_url('business')?>" title="集团业务"><img src="<?php echo get_template_directory_uri()?>/images/nav-business.png" /></a>
					<div class="cbp-hrsub">
						<div class="cbp-hrsub-inner"> 
							<div>
								<!-- <h4>OUR BUSINESS</h4> -->
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('business#bank')?>">投资银行</a></li>									
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('business#asset')?>">资产管理中心</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('business#stock')?>">新三板投资</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('business#loan')?>">融资租赁</a></li>								
								</ul>
							</div>							
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
				<li class="sep"></li>
				<li class="nav-culture">
					<a href="<?php echo site_url('culture')?>" title="集团文化"><img src="<?php echo get_template_directory_uri()?>/images/nav-culture.png" /></a>
					<div class="cbp-hrsub">
						<div class="cbp-hrsub-inner"> 
							<div>
								<!-- <h4>OUR BUSINESS</h4> -->
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('culture#ftf')?>">复腾篮球队</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('culture#wind')?>">复腾暖风</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('culture#club')?>">复腾会——高端俱乐部</a></li>
								</ul>
							</div>							
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
				<li class="sep"></li>
				<li class="nav-projects">
					<a href="<?php echo site_url('projects')?>" title="投资项目"><img src="<?php echo get_template_directory_uri()?>/images/nav-projects.png" /></a>
					<div class="cbp-hrsub">
						<div class="cbp-hrsub-inner"> 
							<div>
								<!-- <h4>PROJECTS / INVESTMENTS</h4> -->
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('projects#zbsy')?>">资本盛宴——互联网金融</a></li>									
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('projects#yixin')?>">一芯生物</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('projects#gfoil')?>">高发石油</a></li>									
								</ul>
							</div>								
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
				<li class="sep"></li>
				<li class="nav-activities"><a href="<?php echo site_url('archives/category/activities')?>" title="最新活动"><img src="<?php echo get_template_directory_uri()?>/images/nav-activities.png" /></a></li>
				<li class="sep"></li>
				<li class="nav-join">
					<a href="<?php echo site_url('joinus')?>" title="加入我们"><img src="<?php echo get_template_directory_uri()?>/images/nav-join.png" /></a>
					<div class="cbp-hrsub">
						<div class="cbp-hrsub-inner"> 
							<div>			
								<!-- <h4>FUTENG CAPITAL</h4>-->			
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('joinus#section-joinus')?>">加入我们</a></li>
									<li><i class="fa fa-angle-right"></i><a href="<?php echo site_url('joinus#section-contact')?>">联系我们</a></li>
								</ul>
							</div>							
						</div><!-- /cbp-hrsub-inner -->
					</div><!-- /cbp-hrsub -->
				</li>
			</ul>	
		</div>
		<div id="links-sns">
			<ul>
				<li class="contact"><a href="<?php echo site_url('joinus#section-contact')?>">联系我们</a></li>
				<li class="sns sns-wx"><img src="<?php echo get_template_directory_uri()?>/images/icon-wx.png"></li>
				<li class="sns"><a href="http://weibo.com/futengcapital" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/icon-wb.png"></a></li>				
			</ul>
		</div>
		 <div id="wx-floater" class="hidden">
		 	<p style="margin-top:0px;font-size:16px;color:white;text-align:center">微信扫一扫关注我们</p>
	    	<img width="200" src="<?php echo get_template_directory_uri()?>/images/wx.jpg" />
	    </div>  
	</header><!-- .site-header -->	
	<div id="content" class="site-content">
