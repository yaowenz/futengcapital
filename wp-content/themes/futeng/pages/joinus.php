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
	<div class="section-title" id="section-joinus">
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
	<div class="section-title" id="section-contact">
		<img src="<?php echo get_template_directory_uri()?>/images/title-contact.png" width="260"  />
	</div>
	<div class="section-content">
		<p style="text-indent:0px"><strong>公司地址：</strong>上海淮海中路398号博银国际23楼</p>
		<p style="text-indent:0px"><strong>公司主页：</strong>http://www.futengcapital.com</p>
		<p style="text-indent:0px"><strong>电话：</strong>021-56661259</p>
		<div id="futeng-map" style="width:100%;height:400px"></div>
	</div>
</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript">
jQuery('li.nav-join').addClass('active');
jQuery(function($) {
	// 百度地图API功能
	var map = new BMap.Map("futeng-map");    // 创建Map实例
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	map.centerAndZoom("上海",15);
	map.addControl(new BMap.NavigationControl());  //左上角，添加默认缩放平移控件
	var local = new BMap.LocalSearch(map, {
		pageCapacity: 1,
		renderOptions:{map: map},
		onSearchComplete: function(results) {			
			
		}
	});
	local.search("上海淮海中路398号博银国际大厦");	
	
	//map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	//map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
});
</script>