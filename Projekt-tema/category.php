<?php get_header(); ?>

	<main role="main">
		
		<!-- section -->
		
        
        

			
        <div class = "container">
			<h3><?php _e( '', 'html5blank' ); single_cat_title(); ?></h3>
			<div class = "row">
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			</div>
		</div>
		</div>
		</div>
	</main>


<?php get_footer(); ?>
