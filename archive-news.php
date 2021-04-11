<?php


get_header();
?>
<section class="content">
		<div class="container">
			<div class="row">
			<hr class="content-hr">
	  <h2>News</h2>
				<?php if ( have_posts() ) : 
			/* Start the Loop */
				while ( have_posts() ) :
				the_post(); ?>
     <a href="#">
				 	<?php echo get_the_post_thumbnail( get_the_ID() ); ?>
				 </a>
				 <div class="news-title">
				 	<?php the_title(); ?>
				 </div>
			<?php endwhile;
			the_posts_navigation();
			else :
			get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
<?php
get_footer();
