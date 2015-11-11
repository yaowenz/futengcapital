<?php 
// WP_Query arguments
$args = array (
	'category_name'          => 'recruit',
	'pagination'             => false,
	'posts_per_page'			=> -1,
);

// The Query
$query = new WP_Query( $args );


print_r($query->posts);

?>


<div class="primary-content full-width">
	<div class="section-title" id="section-zbsy">
		<img src="<?php echo get_template_directory_uri()?>/images/title-joinus.png" width="250" />
	</div>
	<div class="section-content" style="color:#666">
		<div style="margin-top:20px;margin-bottom:50px">请把简历发送至：lina.feng@futengcapital.com</div>
		<p>资本盛宴（www.capitalfeast.com）于2015年正式上线，由上海复腾资本管理有限公司负责运营， 致力于扶持中国实体经济发展， 为小微企业解决融资难融资贵的难题。目前注册资本达到1亿元(实收资本)。</p>
    	<p>随着资本盛宴平台的不断升级，我们将迈入飞速发展的快车道，严格遵守国家相关法律法规，在法律、法规规定的范围内为供需双方提供中介服务，促使互联网金融行为阳光化、合法化，从体制、机制上解决中小微企业的融资问题。同时,我们也将竭尽所能,不断完善对网站平台的管理,努力提升企业内部人员的素质，竭诚为广大用户提供更优质的理财产品，更完善的服务为客户创造投资价值，本着诚信、公开、透明的服务理念，利用资本盛宴为广大的创业者共同打造一个诚信、公平、自由的互联网金融服务平台。</p>
    	<img src="<?php echo get_template_directory_uri()?>/images/img-zbsy.jpg" width="100%"  />		
	</div>
	<div style="margin-bottom:50px;border-bottom:5px solid #ccc;padding-bottom:50px">
		<img src="<?php echo get_template_directory_uri()?>/images/img-joinus.jpg" width="100%"  />	
	</div>
</div>
<script type="text/javascript">
jQuery('li.nav-joinus').addClass('active');
</script>