<?php
/*
Template Name: Ajax Post
*/
?>
<?php /* Template Name:Unge på sporet template*/
      /*Template Post Type: post, page, html5-blank */

get_header(); ?>
	
	<main role="main">
		

		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <!-- PROJEKT MENU-->
  
	
  <!-- END PROJEKT MENU-->
  <br/>

<div class="row">

						
<div class="col-sm-9 main-cont">
	 
	 <div class = "ajax_post_content"></div>
    <hr/>
   
 
  <div class="col-sm-12"><h3>Støttet af</h3></div>
  
<div class = "row">
<div class="col-sm-3"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-sm-4"></div>
<div class="col-sm-4"></div>
</div>

    </div>
<div class="col-sm-3 ">
	<div class ="bg-2 card">
      <?php $sidebar_menu = new Menu();
	  $sidebar_menu->sidebarMenu('Right sidebar menu');?>

    </div>
    <div class = "bg-2 card">
	<?php
	
	
	

	?>
    <?php dynamic_sidebar('UPS seneste nyheder'); ?>
  <?php //$myWidget = new Widget();?>
  <?php //$myWidget->displayResourcesWidget();  ?>
    </div>
	<div class = "bg-1 card">
      <?php dynamic_sidebar( 'Stamoplysninger' ); ?>
    </div>

    
    
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
