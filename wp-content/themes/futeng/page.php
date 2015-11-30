<?php
get_header(); 
while ( have_posts() ) : the_post(); ?>
	<div id="page-<?php echo $post->post_name?>" class="page-content">		
		<div class="cover-img"></div>	
		<div class="primary-wrapper">
<?php 
	include_once('pages/' . $post->post_name . '.php');
endwhile;
?>		
		</div>	
		<div class="clear"></div>
	</div>
	
	<script type="text/javascript">	
		jQuery('#secondary-nav li').first().addClass('active');

		// trailing nav
		jQuery(function($) {
		
			// 有二级导航时，启用菜单追踪功能
			if($('#secondary-nav').length > 0) {
			
				var scrolling = false;
							
				$('#secondary-nav li a').click(function() {
					var current = $(this);
					scrolling = true;
					var target = $(this).attr('href').split('#');
					scrolling = true;
					$.scrollTo($('#' + target[1]).offset().top - 100, {
						duration: 500,
						onAfter: function(target, settings) {
							scrolling = false;
							$(window).scroll();
							$('#secondary-nav li').removeClass('active');
							current.parent().addClass('active');
						}						
					});				
					return false;
				});
	
				
				var sections =  $('.section-title');
				
				var trailingTopInit = jQuery('#secondary-nav')[0].offsetTop;
				$(window).scroll(function() {	
					if(scrolling) return false;						
					var offsetX = $('#secondary-nav').offset().left;
					var offsetY = trailingTopInit + $(window).scrollTop();
	
					if($(window).scrollTop() > trailingTopInit) {
						$('#secondary-nav').offset({left: offsetX, top: $(window).scrollTop() + 30});
					}
					else {
						$('#secondary-nav').offset({left: offsetX, top: offsetY});
					}
	
					for(var i=0; i < sections.length; i++) {
						var limit2 = 0;		
						if(i > 0) {				
							limit2 = $(sections[i-1]).next().offset().top + $(sections[i-1]).next().height() - 600;
						}
						console.log($(window).scrollTop() + "|" + ($(sections[i]).offset().top - 50) + "|" + limit2);
						if($(window).scrollTop() < ($(sections[i]).offset().top - 50) && $(window).scrollTop() > limit2) {
							var id = $(sections[i]).attr('id');
							$('#secondary-nav li').removeClass('active');
							//console.log($('#secondary-nav a[href="#' + id + '"]'));
							$('#secondary-nav a[href=#' + id + ']').parent().addClass('active');
							break;
						}					
					}	
				});
	
				// 如果是通过锚点进入页面，滑动一次
				var enter_section = window.location.hash;	
				if(enter_section.length > 1) {
					enter_section = enter_section.split('#')[1];
					setTimeout(function() {
						$('#secondary-nav li a[href="#section-' + enter_section + '"]').click();
					}, 100);
				}
			}
		});
	</script>	
<?php 
get_footer();
