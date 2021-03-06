<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<?php if ( is_home()) : ?>
		<div id="slider-thumb">			
			<div data-slider="1" class="active hidden slider-thumb-about"><a href="<?php echo site_url('about-futeng')?>"><span>关于复腾</span></a></div>
			<div data-slider="2" class="hidden slider-thumb-bank"><a href="<?php echo site_url('business#bank')?>"><span>投资银行</span></a></div>
			<div data-slider="3" class="hidden slider-thumb-asset"><a href="<?php echo site_url('business#asset')?>"><span>资产管理中心</span></a></div>
			<div data-slider="4" class="hidden slider-thumb-stock"><a href="<?php echo site_url('business#stock')?>"><span>新三板投资</span></a></div>			
			<div data-slider="5" class="hidden slider-thumb-loan"><a href="<?php echo site_url('business#loan')?>"><span>融资租赁</span></a></div>
		</div>
		<div class="swiper-container" id="sliders-index">
			<div class="swiper-wrapper">				
				<div class="swiper-slide swiper-slider-1">
					<video id="ftvideo" class="video-js vjs-big-play-centered" preload="auto" controls>
						<source src="http://www.futengcapital.com/ftvideo.mp4" type='video/mp4' />
					</video>
		        </div>
				<div class="swiper-slide swiper-slider-2">		
					&nbsp;&nbsp;		            
		            <div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<h2>投资银行</h2>
		            	<p>复腾资本战略投资S.I.D是复腾资本近年来发展的业务创新，主要专注于互联网、消费服务、能源环保等领域中早期创业公司的投行与投资业务。</p>
		            </div>
				</div>
				<div class="swiper-slide swiper-slider-3">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
						<h2>资产管理中心</h2>
		            	<p>财富管理中心作为复腾资本旗下的财富管理品牌，依托强大的资金实力和深厚的金融行业资源，以及核心团队在创投、私募基金、资产管理、投资担保和实体等领域的成功经验，在坚持“从项目源头控制风险“的准则下，业务涉及财务保障规划、财务需求分析、资产配置、股权/债权投资管理、退休管理、子女教育基金管理、风险管理等综合性理财规划服务。</p>
		            		            
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-4">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">		            
		            	<h2>新三板投资</h2>
		            	<p>新三板具有成本低、挂牌快、融资迅速、推进上市、易获取财政支持的优势，一旦上市新三板，规范公司经营、为企业搭建有效的融资平台及转板、公司业绩大幅度增长便指日可待。新三板在创新型、创业型、成长型及中小微型企业的发展中起到了承上启下的重要作用，是高新技术企业的孵化器。通过规范运作，当企业达到主板上市条件时，即可通过绿色通道转板上市。</p>
						<p>复腾资本战略投资部（Strategic Investment Dept）,致力于通过与企业的长期通力配合，以高质量、优品质、好口碑的标准孵化出越来越多的走向绿色通道的挂牌新三板公司。</p>
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-5">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
						<h2>融资租赁</h2>
		            	<p>融资租赁在中国是一个新兴的行业，不仅在各交易主体之间实现新的权责利平衡，为客户提供了新的融资方法，而且成为交易主体优势互补、配置资源的机制和均衡税务的理财工具。 复腾资本融资租赁服务兼具融资、理财、促销、节税、资产管理等强大功能，将有效帮助股东企业和中小民营企业快速稳健发展和转型升级。</p>		            		            	
		            </div>
		        </div>			
			</div>
			<!-- Add Pagination -->
			<!-- <div class="swiper-pagination"></div> -->
	    </div>	 	   
	    <div id="news-floater">	    	
	    	<div class="news-content hidden">
	    		<ul>
	    			<?php 
	    			$args = array (
						'category_name'          => 'activities',
						'pagination'             => false,
						'posts_per_page'		 => 5,
					);
	    			// The Query
	    			$query = new WP_Query( $args );
	    			$posts = $query->posts;
	    			
	    			foreach($posts as $v):
	    			?>
	    			<li>
	    				<p class="title"><a href="<?php echo get_the_permalink($v)?>" target="_blank"><?php echo get_the_title($v)?></a><span class="date"><?php echo get_the_date('Y-m-d', $v)?></span></p>
	    			</li>
	    			<?php endforeach;?>	    			
	    		</ul>
	    	</div>
	    	<div class="news-button">
	    		<img src="<?php echo get_template_directory_uri()?>/images/icon-news.jpg" width="45" />
	    	</div>
	    </div>     	
		<script type="text/javascript">
			var ie_simple_mode = jQuery('html').hasClass('ie-lt-10');
			
			// videojs
			var player = videojs('ftvideo', {
				language: "zh-CN",
			});
			
			//player.removeChild('controlBar');
			
			var playerReady = false;

			player.ready(function(){
				playerReady = true;			
				jQuery(window).resize();
			});
							
			// ie9 使用 slide 能显示幻灯片, ie8 不支持
			var swiper = new Swiper('.swiper-container', {
				effect: 'fade',
				parallax: true,
				speed: 800,
				autoplay: 0,
		        pagination: '.swiper-pagination',		      
		        paginationClickable: true,
		        autoplayDisableOnInteraction: true,
		        onSlideChangeStart: function(swiper) {	
			        player.pause();		       
		        	jQuery('#slider-thumb div').removeClass('active');
					jQuery('#slider-thumb div[data-slider="' + (swiper.activeIndex + 1) + '"]').addClass('active animated');
		        },
		        onSlideChangeEnd: function(swiper) {
			        if(swiper.activeIndex == 0) player.play();
		        }
		    });			    		

		    // 动态调整大图大小
			jQuery(window).on('resize', function() {
				var h = jQuery(window)[0].innerHeight - jQuery('header').height() - 20; // - margin 
				if(h > 50) {
					jQuery('div#content').height(h);
				}				
				
				jQuery('.vjs-big-play-button').css('left', jQuery('div.swiper-slider-1').width() / 2 + "px");
						
				if(playerReady) {
					// origin video 960x540		
					player.height(jQuery('div.swiper-slider-1').height() - 30);	
					player.width(player.height() / 540 * 960);
					var playerMarginLeft = ((jQuery('div.swiper-slider-1').width() - player.width()) / 2) + "px";
					jQuery('#ftvideo video').css("left", playerMarginLeft);
					jQuery('.vjs-control-bar').css('left', playerMarginLeft);
					player.play();
				}				
			});
			
			jQuery(window).resize();	

			// 最新动态
			jQuery('#news-floater').hover(
					function() {jQuery('.news-content').show(300);}, 
					function() {jQuery('.news-content').hide(300);}
			);	
						
			jQuery(function($) {			

				var aniCounter = 0;
				$('#slider-thumb > div').each(function() {
					aniCounter ++;
					if(!$(this).hasClass('clear')) {
						var cur = $(this);
						setTimeout(function() {
							cur.addClass('animated slideInLeft');
							//cur.show(300);
							cur.removeClass('hidden');
						}, 200 * aniCounter);
					}
				});	
							
				$('#slider-thumb div').hover(function() {
					var slider_index = $(this).data('slider');

					if(slider_index > 0) {
						slider_index --; // 调整为以0为起点
						if(swiper.activeIndex != slider_index) {
							swiper.slideTo(slider_index);
						};						
					}									
				});
			});			
		</script>
	</div><!-- .site-content -->
	<footer id="footer-index">
		<div class="site-info">Copyright 2015&nbsp;&nbsp;&nbsp;&nbsp;上海复腾资产管理有限公司&nbsp;&nbsp;&nbsp;&nbsp;沪ICP备14052833号-1</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->
	<?php 
		wp_footer();
		else: 
		get_template_part( 'content');
		get_footer();
		endif;
	else:
		get_template_part( 'content', 'none' );
		get_footer();
	endif;
?>
</body>
</html>
