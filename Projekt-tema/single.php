<?php get_header(); ?>
    <?php $page_id = "ups"?>
	<?php $project_name = "Unge På Sporet";?>
	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
  <!-- END PROJEKT MENU-->
  <?php the_breadcrumb(); ?>
   <h3 style = "margin-top:20px;" ><?php the_title();?></h3>
   
  <div class="row">
 
<div class="col-sm-9 ">
     <?php if (has_post_thumbnail( $post->ID ) ): ?>
	
     
	 <?php endif; ?>
	 
    <?php the_content();?>
    <hr/>
   <div class = "row"></div>



</div>
<div class = "col-sm-3">
		 <div class = "bg-2 card">
	<?php $myWidget = new Widget();?>
    <?php $myWidget->displayResourcesWidget() ?>
  
    </div>
	</div>
 

</div>

				

			

				<br class="clear">

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
