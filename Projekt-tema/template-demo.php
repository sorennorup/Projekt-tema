<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container container-height">
  <div class = "row">
    <div class="col-lg-8 ">
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Underside_1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Underside_2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Teorier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Underside 4</a>
  </li>
  </ul>
    </div>
  </div>
  
<div class="row">

<div class="col-lg-8 ">
     <?php if (has_post_thumbnail( $post->ID ) ): ?>
     <img style = "margin-top:20px;margin-bottom: 10px;" class = "projekt-logo img-rounded" src = "<?php echo get_the_post_thumbnail_url($post->ID); ?>" width = "200px;"/>
	 <?php endif; ?>
   <p class="text-justify"><?php the_content();?></p>
   <hr/>
   <div class = "row"></div>
 <div class = "row">
  <div class="col-lg-12"><h3>Sponsorer</h3></div>
  </div>

<div class = "row">

<div class="col-lg-4"><p>Sponsorer/ Grid med det antal sponsorer der er i projektetasdadsfasa</p></div>
<div class="col-lg-4"><p>Sponsorer/ Grid med det antal sponsorer der er i projektetasdfasaf</p></div>
<div class="col-lg-4"><p>Sponsorer/ Grid med det antal sponsorer der er i projektetasdfasdasfda</p></div>
</div>
    </div>
<div class="col-lg-4 ">
  

    <div class = "bg-2 card">
     <h3>Stamoplysninger</h3>
    
    Ambitioni dedisse scripsisse iudicaretur.
    Cras mattis iudicium purus sit amet fermentum.
    Donec sed odio operae, eu vulputate felis rhoncus.
    Praeterea iter est quasdam res quas ex communi. 
    </div>
    
 
    <div class ="bg-1 card">
      <h3>Nyheder</h3>
    <p> </p>
    </div>
    
    <div class = "bg-2 card">
     <h3>resourcer</h3>
    
   <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
   rapporter
    <span class="badge badge-primary badge-pill">14 nye</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
   Udgivelser
    <span class="badge badge-primary badge-pill">2 nye</span> 
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Porjekter
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>
    </div>
    
  
  
    </div>

</div>
 

</div>

				

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
