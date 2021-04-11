<?php
get_header(); ?>

	<section class="content">
		<div class="container">
			<div class="row">
			 <hr class="content-hr">
	   <h2>PORTFOLIO</h2>
				<?php if ( have_posts() ) : 
  	  while ( have_posts() ) : the_post(); ?>
  	  <div class="col-lg-4 col-md-6 col-12">
  	   <div class="portfolio-item">
				   <a href="#">
				    <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
				    <div class="back">+</div>
				   </a>
				    <div class="news-title"><?php the_title(); ?></div>
				   </div>
				  </div>
     <?php endwhile;
    else :
  	 echo "no items";
    endif; 
    ?>
			</div>
	</section>
 <?php
get_footer();
