<?php /* Template Name:Frontpage*/ get_header(); ?>

<?php

    //TO DO
	
	//TAKEs PARENT CAT ID AS ARGUMENT AND RETURNS ARRAY ALL CHILD CATEGORIES AND THEIR PROPERTIES
	
	// create widget to display the subheader text
	
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
	
 <!--  The subheader text area -->
<div class="col-sm-12 ">
	<div class="row mb-4 sub-header " style="margin-left: 4px; margin-right: 5px;">
<div class="col-lg-5 bg-4 left-box">
      <?php dynamic_sidebar('Subheader left'); ?>
     </div>
<div class="col-lg-7 bg-2 right-box ">
	 <?php dynamic_sidebar('Subheader right'); ?>
</div>
	</div>
	
	 
    <?php the_content();?>
    <hr/>
  <!-- The sponser view     --> 
 

  <!-- End the sponser view     --> 
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
