<div id="page-side">
	<img src="<?php echo get_template_directory_uri()?>/images/slogan.png" />
	<ul id="secondary-nav">
		<li class="active"><i class="fa fa-angle-right hidden"></i>&nbsp;<a href="#section-about">公司介绍 About</a></li>
		<li><i class="fa fa-angle-right hidden"></i>&nbsp;<a href="#section-culture">企业文化 Culture</a></li>
		<li><i class="fa fa-angle-right hidden"></i>&nbsp;<a href="#section-contact">联系我们 Contact</a></li>
		<li><i class="fa fa-angle-right hidden"></i>&nbsp;<a href="#section-partners">合作机构 Partners</a></li>
	</ul>
</div>
<div class="primary-content">
	<div class="section-title" id="section-about">
		<img src="<?php echo get_template_directory_uri()?>/images/title-about.png" width="250" />
	</div>
	<div class="section-content">
		<p>复腾资本集团于2012年成立，是一家专注于长期结构性价值投资的投资公司，致力于集聚全球优质资本，以股权投资为纽带，助力中国实体经济发展。合伙人及投资团队兼备国际经济发展视野和本土创业企业经验，从成立至今，复腾资本坚持独立思考，深入研究，主要投资于新媒体、房地产、消费与零售、互联网与媒体、医疗健康、能源与制造业等行业里处于不同发展阶段的优秀企业。</p>
    	<p>复腾从创立之初起就定位于做具有独立投资视角的投资者，受托管理的资金主要来自于目光长远的全球性机构投资人，包括家族基金及主权财富基金等。 作为中国最优秀的基金之一，复腾资本拥有根植中国的国际化团队，可以实质性协助企业提高经营管理水平、进行国际化拓展，建立行业领先地位。复腾资本与被投企业结伴同行、共同发展，在帮助企业成长过程中获得投资回报，共同为中国经济发展做出贡献。</p>
    	<img src="<?php echo get_template_directory_uri()?>/images/img-about.jpg" width="100%"  />		
	</div>
	<div class="section-title" id="section-culture">
		<img src="<?php echo get_template_directory_uri()?>/images/title-culture.png" width="250"  />
	</div>
	<div class="section-content">
		<p>复腾资本向来不予余力投入企业文化的建设中。公司定期组织员工进行篮球比赛，有效提高员工身体素质，不仅如此，复腾篮球队也是复腾旗下的又一优秀的品牌展示。而在公司内部，由企划部和公关部起头，每周都会组织全体员工进行团队活动，诸如下午茶、聚餐、唱歌、羽毛球等集体活动， 在放松娱乐的同时， 提高团队的协同作业能力， 加强员工之间的凝聚力，开辟了一片业务之外的交流天地，也方便员工之间加深彼此的了解。</p>
		<img src="<?php echo get_template_directory_uri()?>/images/img-culture.jpg" width="100%"  />	
	</div>
	
	<div class="section-title" id="section-contact">
		<img src="<?php echo get_template_directory_uri()?>/images/title-contact.png" width="250"  />
	</div>
	<div class="section-content">
		<p style="text-indent:0px"><strong>公司地址：</strong>上海淮海中路398号博银国际23楼</p>
		<p style="text-indent:0px"><strong>公司主页：</strong>http://www.futengcapital.com</p>
		<p style="text-indent:0px"><strong>电话：</strong>021-56661259</p>
		<div id="futeng-map" style="width:100%;height:300px"></div>
	</div>
	
	<div class="section-title" id="section-partners">
		<img src="<?php echo get_template_directory_uri()?>/images/title-partners.png" width="250"  />
	</div>
	<div class="section-content">
		<table width="100%" border="0" class="partners">
			<tr>
				<td width="25%"><img src="<?php echo get_template_directory_uri()?>/images/logo-partner-1.png" width="100%" /></td>
				<td width="25%"><img src="<?php echo get_template_directory_uri()?>/images/logo-partner-2.png" width="100%" /></td>
				<td width="25%"><img src="<?php echo get_template_directory_uri()?>/images/logo-partner-3.png" width="100%" /></td>
				<td width="25%"><img src="<?php echo get_template_directory_uri()?>/images/logo-partner-4.png" width="100%" /></td>
			</tr>
				
		</table>
	</div>
	
</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript">
jQuery('li.nav-about').addClass('active');

jQuery(function($) {
	// 百度地图API功能
	var map = new BMap.Map("futeng-map");    // 创建Map实例
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	map.centerAndZoom("上海",15);
	map.addControl(new BMap.NavigationControl());  //左上角，添加默认缩放平移控件
	var local = new BMap.LocalSearch(map, {
		renderOptions:{map: map}
	});
	local.search("上海淮海中路398号博银国际23楼");	
	
	//map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	//map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
});
</script>