<?php get_header(); ?>
		<div id="slider-thumb">			
			<div data-slider="1" class="active hidden slider-thumb-1"><span>关于复腾</span></div>
			<div data-slider="2" class="hidden slider-thumb-2"><span>新三板投资</span></div>
			<!-- <div class="clear"></div> -->
			<div data-slider="3" class="hidden slider-thumb-3"><span>信贷中心</span></div>
			<div data-slider="4" class="hidden slider-thumb-4"><span>股权投资PE</span></div>
			<!-- <div class="clear"></div> -->
			<div data-slider="5" class="hidden slider-thumb-5"><span>第三方理财</span></div>
			<div data-slider="6" class="hidden slider-thumb-6"><span>融资租赁</span></div>
		</div>
		<div class="swiper-container" id="sliders-index">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-slider-1">
					<!-- add some text content to FIX IE 11 swiper not working bug -->
					&nbsp;&nbsp;
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-1-text.png" />
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-2">				            
		            <div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-2-text.png" />
		            </div>
				</div>
				<div class="swiper-slide swiper-slider-3">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-3-text.png" />
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-4">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-4-text.png" />
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-5">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-5-text.png" />
		            </div>
		        </div>
				<div class="swiper-slide swiper-slider-6">
					<div class="text" data-swiper-parallax="-1500" data-swiper-parallax-duration="1200">
		            	<img width="500" src="<?php echo get_template_directory_uri()?>/images/slider-6-text.png" />
		            </div>
		        </div>
			</div>
			<!-- Add Pagination -->
			<!-- <div class="swiper-pagination"></div> -->
	    </div>	 	   
	    <div id="news-floater">	    	
	    	<div class="news-content hidden">
	    		<ul>
	    			<li>
	    				<p class="title"><a href="http://183.60.177.196/fin/lc/201510/26/8249840.html" target="_blank">投资再到投行，专注双边市场中的平衡点</a></p>
	    				<p class="date">2015-10-26</p>
	    			</li>
	    			<!-- 
	    			<li>
	    				<p class="title"></p>
	    				<p class="date"></p>	    			
	    			</li>
	    			<li>
	    				<p class="title"></p>
	    				<p class="date"></p>	    			
	    			</li>
	    			 -->
	    		</ul>
	    	</div>
	    	<div class="news-button">
	    		<img src="<?php echo get_template_directory_uri()?>/images/icon-news.jpg" width="45" />
	    	</div>
	    </div>     	
		<script type="text/javascript">
			var ie_simple_mode = jQuery('html').hasClass('ie-lt-10');
							
			// ie9 使用 slide 能显示幻灯片, ie8 不支持
			var swiper = new Swiper('.swiper-container', {
				effect: 'fade',
				parallax: true,
				speed: 800,
				autoplay: 3000,
		        pagination: '.swiper-pagination',		      
		        paginationClickable: true,
		        autoplayDisableOnInteraction: true,
		        onSlideChangeStart: function(swiper) {
		        	jQuery('#slider-thumb div').removeClass('active');
					jQuery('#slider-thumb div[data-slider="' + (swiper.activeIndex + 1) + '"]').addClass('active animated');
		        }
		    });			

		    // 动态调整大图大小
			jQuery(window).on('resize', function() {
				var h = jQuery(window)[0].innerHeight - jQuery('header').height() - 20; // - margin 
				if(h > 50) {
					jQuery('div#content').height(h);
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

<?php wp_footer(); ?>
</body>
</html>
