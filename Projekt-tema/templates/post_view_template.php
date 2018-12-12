<?php /* Template Name: Post view */ ?>
<?php get_header(); ?>

	<main role="main">
		
		<!-- section -->
		<section>
         
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
  <!-- END PROJEKT MENU-->
<div class="row">

<div class="col-lg-9 ">
	
   
     <?php the_content(); ?>
   
 <!-- The sponser view     --> 
 
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
  <!-- End the sponser view  -->  
 
</div>

			
<div class="col-sm-3 ">
	<div class = "bg-2 card post-view">
		
		<?php dynamic_sidebar('UPS seneste nyheder'); ?>
		<?php //$myWidget = new Widget();?>
		<?php //$myWidget->displayResourcesWidget();  ?>
     </div>
	
	<div class ="bg-1 card sidebar-menu">
      <?php $sidebar_menu = new MenuViewController();
	  $sidebar_menu->sidebarMenu('Right sidebar menu');?>
	  

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

