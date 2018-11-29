<?php $count = 1;?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
   
     <?php if ($count < 5) : ?> <div class = "col-lg-3 mb-4">
	   
		<?php elseif ($count == 5): ?>
	    
			<div class = "row"> <div class = "col-lg-3 mb-4">
		
		<?php $count = 1; ?>
	 <? endif; ?>
	    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	    <div class = "card h-100">
	<!-- article -->
	    
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

		

		<!-- post title -->
		 <? if($count % 2 == 0):?> <div class = "card-header bg-1">
		 <? else: ?>  
		 <div class = "card-header bg-2">
		 <? endif ?>
			
		<h6>
			
			 <?php $count++;?> 
			
			<?php the_title(); ?>
		</h6>
		</div>
		<!-- /post title -->
		<div class = card-body>
		  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		 <div class = "card-img-top" ><?php the_post_thumbnail();?></div>
		  <?php endif; ?>
			
			<div class = "card-text loop"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>
				
			 <!-- post details -->
		<span class="date"><?php _e( 'Udgivet ', 'html5blank' ); the_time('j F, Y'); ?> <?php  ?></span>
		<span class="author"><?php //the_author_posts_link(); ?></span>
		<!--<span class="comments"><?php// if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
		<!-- /post details -->
		<?php //edit_post_link(); ?>
			
		</div>
		
         <? if ($count == 5) : ?> </div> <?php endif ?>
			
	   </div>
				</a>
	  
	

	</article>
	</div>
	   
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
