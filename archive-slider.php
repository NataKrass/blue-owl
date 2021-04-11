<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>
	<section class="content">
		<div class="container">
			<div class="row">
			 <hr class="content-hr">
	   <h2>slider</h2>
		  <?php if ( have_posts() ) : ?>
    <?php
		  	/* Start the Loop */
			  while ( have_posts() ) :
				 the_post(); ?>
     <div class="slider-item"> 
		  	 <div class="slider-content">
		  		<h1>
		  		 <?php the_title(); ?>
		  		</h1>
		  		<p>
		  		<?php the_descrpiption(); ?>
		  		</p>
		  	</div>
		   <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
		  </div>
			<?php endwhile;
   the_posts_navigation();
   else :
    echo "no items";
 	 endif;
		 ?>
 	</div>
	</section>
<?php
get_footer();

				
    
	

