<?php 
// WP_Query arguments
$args = array (
	'category_name'          => 'recruit',
	'pagination'             => false,
	'posts_per_page'			=> -1,
);

// The Query
$query = new WP_Query( $args );
$posts = $query->posts;
?>
<div class="primary-content full-width">
	<div class="section-title" id="section-zbsy">
		<img src="<?php echo get_template_directory_uri()?>/images/title-joinus.png" width="250" />
	</div>
	<div class="section-content" style="color:#666">
		<div style="margin-top:20px;margin-bottom:10px">
			<p><strong>请把简历发送至：</strong><a href="mailto:lina.feng@futengcapital.com" style="color:#666;font-weight:bold;text-decoration:none">lina.feng@futengcapital.com</a><p>
			<p><strong>公司地址：</strong>上海淮海中路398号博银国际23楼</p>			
			<p><strong>电话：</strong>021-56661259</p>			
		</div>
		<ul>
		<?php foreach($posts as $v): ?>
		<li><a href="<?php echo get_permalink($v->ID)?>"><?php echo $v->post_title?></a></li>
		<?php endforeach;?>		
		</ul>
		<div class="clear"></div>
	</div>
	<div style="margin-bottom:50px;border-bottom:5px solid #ccc;padding-bottom:50px">
		<img src="<?php echo get_template_directory_uri()?>/images/img-joinus.jpg" width="100%"  />	
	</div>
</div>
<script type="text/javascript">
jQuery('li.nav-join').addClass('active');
</script>