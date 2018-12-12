<?php /* Template Name:Unge på sporet template*/ get_header(); ?>

<?php

    //TO DO  CREATE FUNCTION  of this
	
	//TAKEs PARENT CAT ID AS ARGUMENT AND RETURNS ARRAY ALL CHILD CATEGORIES AND THEIR PROPERTIES
	$ressource_properties = array();
    $child_arg = array( 'hide_empty' => false );
    $child_cat = get_terms( 'category', $child_arg );
    
        foreach( $child_cat as $child_term ) {
			$url = get_category_link($child_term->term_id);
			$prop['name'] = $child_term->name;
            $prop['num_posts'] = $child_term->count;
			
			array_push($ressource_properties,$prop);      
		}
		
?>
	
	
	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <br/>

<div class="row">
	

<div class="col-sm-9 ">
	 
    <?php the_content();?>
    <hr/>
  <!-- The sponser view     --> 
 
<div class = "row">
<div class="col-sm-4 sponsor-logo"><?php dynamic_sidebar( 'UPS sponsorer' ); ?></div>
<div class="col-sm-4"></div>
<div class="col-sm-4"></div>
</div>
  <!-- End the sponser view     --> 
    </div>
<div class="col-sm-3 ">
	<div class ="bg-2 card">
      
	  <?php dynamic_sidebar( 'UPS seneste nyheder' ); ?>

    </div>
    <div class = "bg-1 card move-top sidebar-menu">
    
  <?php $side_menu = new MenuViewController();
    $side_menu->sidebarMenu('Right sidebar menu');
	//$myWidget = new Widget();?>
  <?php  //$myWidget->displayResourcesWidget();  ?>
    </div>
	<div class = "bg-2 card">
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
