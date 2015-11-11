<div class="page-content single-content">		
	<div class="cover-img"></div>	
	<div class="primary-wrapper">
	
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
	<div class="clear"></div>
</div>