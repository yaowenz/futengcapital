<?php get_header(); ?>

<div class="page-content category-page">		
	<div class="cover-img"></div>		
	<div class="primary-wrapper">		
		<div class="primary-content">
			<div class="section-title">
				<img src="<?php echo get_template_directory_uri() . '/images/title-activities.png'?>" width="250" />
			</div>
			<div class="section-content" style="margin-top:30px">
				<?php while ( have_posts() ) : the_post();	?>			
				<div class="entry-list">
					<div class="entry-date"><?php echo get_the_date('Y/m/d');?></div>
					<div class="entry-title"><i class="fa fa-angle-right">&nbsp;</i><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></div>
					<div class="clear"></div>
				</div>
				<?php endwhile;	?>
			</div>
			<?php 
				the_posts_pagination(array(
					'prev_text'          => '上一页',
					'next_text'			 => '下一页',								
				));				
			?>			
		</div>	
		<div id="page-side">
			<div class="side-title"><i class="fa fa-star"></i>重要活动</div>		
			<?php 			
				$args = array (
					'category_name'          => 'activities-i',
					'pagination'             => false,
					'posts_per_page'			=> 10,
				);
				
				// The Query
				$query = new WP_Query( $args );
				$posts = $query->posts;		
		
				if(empty($posts)) :?>
			<p>暂无重要活动。</p>
			<?php else: ?>
			<?php foreach($posts as $v) : if(empty($v)) continue; ?>
			<div class="entry-side-list">			
				<?php if($t = get_post_thumbnail_id($v->ID)): ?>
				<div class="post-thumb"><img src="<?php echo array_shift(wp_get_attachment_image_src($t, 'medium')); ?>" width="250" /></div>
				<?php endif?>
				<?php $p = get_post($v); ?>
				<div class="post-title">● <a href="<?php echo get_permalink($p) ?>"><?php echo get_the_title($p)?></a></div>
				<div class="post-date"><?php echo get_the_date('Y/m/d', $p);?></div>
			</div>
			<?php endforeach;?>
			<?php endif;?>		
		</div>	
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
jQuery('li.nav-activities').addClass('active');
</script>
<?php
get_footer();