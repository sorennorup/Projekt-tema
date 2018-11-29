<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
          <div class="row">

			<div class="col-lg-10 ">
			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			</div>
		  </div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
