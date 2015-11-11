<?php get_header(); ?>

<div class="page-content category-page">		
	<div class="cover-img"></div>		
	<div class="primary-wrapper">		
		<div class="primary-content">
			<div class="section-title">
				title
			</div>
			<div class="section-content">
				<?php 
				while ( have_posts() ) : the_post();
				?>
			
				<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
				
				
				
				<?php 
					the_content();
				?>
				<?php 
				endwhile;
				?>
			</div>
		</div>	
		<div id="page-side">
			重要活动
			<?php 
			// WP_Query arguments
				$args = array (
					'category_name'          => 'activities-i',
					'pagination'             => false,
					'posts_per_page'			=> 10,
				);
				
				// The Query
				$query = new WP_Query( $args );
				$posts = $query->posts;
?>
			
		</div>	
		<div class="clear"></div>
	</div>
</div>
<?php
get_footer();