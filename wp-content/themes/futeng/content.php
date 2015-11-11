<div class="page-content single-content">		
	<div class="cover-img"></div>	
	<div class="primary-wrapper">	
		<div class="primary-content">
			<?php 
				$post_id = 0;
				while ( have_posts() ) : the_post(); $post_id = $post->ID;
			?>
			<div class="section-title"><?php the_title( '<h1 class="entry-title">', '</h1>' );?></div>
			<div class="entry-date"><?php echo get_the_date();?></div>
			<div class="section-content" style="margin-top:50px">				
				<?php the_content(); endwhile;	?>
			</div>
		</div>	
		<div id="page-side">
			<div class="side-title"><i class="fa fa-clock-o"></i>最近浏览</div>
			<?php if(empty($_SESSION['history'])) :?>
			<p>暂无浏览历史。</p>
			<?php else: ?>
			<?php foreach($_SESSION['history'] as $v) : if(empty($v)) continue; ?>
			<div class="entry-side-list">			
				<?php if($t = get_post_thumbnail_id($v)): ?>
				<div class="post-thumb"><img src="<?php echo array_shift(wp_get_attachment_image_src($t, 'medium')); ?>" width="250" /></div>
				<?php endif?>
				<?php $post_histroy = get_post($v); ?>
				<div class="post-title">● <a href="<?php echo get_permalink($post_histroy) ?>"><?php echo get_the_title($post_histroy)?></a></div>
				<div class="post-date"><?php echo get_the_date('Y/m/d', $post_histroy);?></div>
			</div>
			<?php endforeach;?>
			<?php endif;?>
		</div>	
		<div class="clear"></div>
	</div>
</div>
<?php 
if(empty($_SESSION['history'])) $_SESSION['history'] = array();

if(!in_array($post_id, $_SESSION['history'])) {
	if(count($_SESSION['history']) >= 5) {		
		array_shift($_SESSION['history']);
	}
	array_push($_SESSION['history'], $post_id);	
}
?>