<?php get_header(); ?>

	<main role="main">
		
		<!-- section -->
		
        
        

			
        <div class = "container">
			<h3><?php _e( '', 'html5blank' ); single_cat_title(); ?></h3>
			<div class = "row">
			<?php get_template_part('loop'); ?>


			<?php get_template_part('pagination'); ?>
			</div>
			 <hr/>
						<div class = "row">
  <div class="col-sm-12"><h3>Funded by Erasmus+</h3></div>
  </div>

<div class = "row">
<div class="col-sm-4 sponsor-logo"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-sm-4"></div>
<div class="col-sm-4"></div>
</div>
		</div>
		
		
		</div>
		</div>
	</main>


<?php get_footer(); ?>
