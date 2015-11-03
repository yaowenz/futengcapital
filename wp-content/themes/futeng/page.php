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
		// trailing nav
		jQuery(function($) {
			var trailingTopInit = jQuery('#secondary-nav')[0].offsetTop;
			$(window).scroll(function() {
				var offsetX = $('#secondary-nav').offset().left;
				var offsetY = trailingTopInit + $(window).scrollTop();

				if($(window).scrollTop() > trailingTopInit) {
					$('#secondary-nav').offset({left: offsetX, top: $(window).scrollTop() + 30});
				}
				else {
					$('#secondary-nav').offset({left: offsetX, top: offsetY});
				}
				
				
			});
		});
	</script>	
<?php 
get_footer();
