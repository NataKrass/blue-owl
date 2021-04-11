<?php
/**
 * Template name: Home page
 */

get_header(); ?>
 <!-- slider -->
	 <div class="owl-carousel" id="slider">
		 <?php $args = array('post_type' => 'book', 
		   'posts_per_page' => 6,);
					$book = new WP_Query( $args ); // loop
						if( $book->have_posts() ) : ?>
    	<?php while( $book->have_posts() ) :
      $book->the_post();
   		?>
     <div class="slider-item">
				  <div class="slider-content">
		  	  <h1><?php the_title(); ?></h1>
				    <?php the_content(); ?>
		  	 </div>
				    <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
				 </div>
     <?php endwhile; ?>
 			<?php endif;
				wp_reset_postdata() ?>
		</div>
	<!-- end slider -->
	<section class="benefits">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-12">
						<div class="benefit-item benefit-item-1">
							<div class="benefit-item_image" style="background-image: url(<?php
         $text = get_post_meta( get_the_ID(), '_oneprefix_image', true );
									echo esc_html( $text );
									?>)">	</div>
							<h2 class="benefit-item_heading">
								<?php
         $text = get_post_meta( get_the_ID(), '_oneprefix_text', true );
									echo esc_html( $text );
									?>
							</h2>
							<p class="benefit-item_description">	<?php
         $text = get_post_meta( get_the_ID(), '_oneprefix_textarea', true );
									echo esc_html( $text );
									?>
							</p>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
						<div class="benefit-item benefit-item-2">
						<div class="benefit-item_image" style="background-image: url(<?php
         $text = get_post_meta( get_the_ID(), '_twoprefix_image', true );
									echo esc_html( $text );
									?>)">	</div>
							<h2 class="benefit-item_heading">
								<?php
         $text = get_post_meta( get_the_ID(), '_twoprefix_text', true );
									echo esc_html( $text );
									?>
							</h2>
							<p class="benefit-item_description">	<?php
         $text = get_post_meta( get_the_ID(), '_twoprefix_textarea', true );
									echo esc_html( $text );
									?>
							</p>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
						<div class="benefit-item benefit-item-3">
							<div class="benefit-item_image" style="background-image: url(<?php
         $text = get_post_meta( get_the_ID(), '_threeprefix_image', true );
									echo esc_html( $text );
									?>)">	</div>
							<h2 class="benefit-item_heading">
								<?php
         $text = get_post_meta( get_the_ID(), '_threeprefix_text', true );
									echo esc_html( $text );
									?>
							</h2>
							<p class="benefit-item_description">	<?php
         $text = get_post_meta( get_the_ID(), '_threeprefix_textarea', true );
									echo esc_html( $text );
									?>
							</p>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 col-12">
						<div class="benefit-item benefit-item-4">
								<div class="benefit-item_image" style="background-image: url(<?php
         $text = get_post_meta( get_the_ID(), '_fourprefix_image', true );
									echo esc_html( $text );
									?>)">	</div>
							<h2 class="benefit-item_heading">
								<?php
         $text = get_post_meta( get_the_ID(), '_fourprefix_text', true );
									echo esc_html( $text );
									?>
							</h2>
							<p class="benefit-item_description">	<?php
         $text = get_post_meta( get_the_ID(), '_fourprefix_textarea', true );
									echo esc_html( $text );
									?>
							</p>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<hr class="benefits-hr">
				</div>
			</div>
		</div>
	</section>
	<section class="search">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>
						Search
					</h1>
					<?php echo get_search_form(); ?>
					
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container">
			<div class="row">
				<!-- portfolio -->
				<hr class="content-hr">
	   <h2>PORTFOLIO</h2>
				 <div class="owl-carousel" id="news-carousel">
				  <?php $args = array('post_type' => 'portfolio', 
		     'posts_per_page' => 6,);
							$portfolio = new WP_Query( $args ); // loop
							if( $portfolio->have_posts() ) : ?>
    			<?php while( $portfolio->have_posts() ) :
        $portfolio->the_post();
        // post ?>
        <div class="owl-carousel_item">
				     <a href="<?php the_permalink(); ?>">
				  			<?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
				      <div class="back">+</div>
				     </a>
				     <div class="news-title">
				     	<?php the_title(); ?>
				     </div>
				    </div>
       <?php endwhile; ?>
 			  <?php endif;
				  wp_reset_postdata() ?>
    </div>
			</div>
			<div class="row">
				<hr class="content-hr short-hr">
				<h2>What is Lorem Ipsum?</h2>
				<div class="content-post">
					<div class="content-post_img">
							<?php twentysixteen_post_thumbnail(); ?>
						<div class="post-mark">
							There are many variations
						</div>
					</div>
					<div class="content-post_desc">
       <?php the_content( $more_link_text, $strip_teaser ); ?>
     </div>
				</div>
			</div>
			<div class="row">
				<hr class="content-hr">
				<h2>LATEST NEWS</h2>
			</div>
			<div class="row articles">
		   <?php $args = array('post_type' => 'news', 
		   'posts_per_page' => 4,);
						$news = new WP_Query( $args ); //loop
						if( $news->have_posts() ) : ?>
    		<?php while( $news->have_posts() ) :
       $news->the_post();
        // post ?>
       <div class="col-lg-6">
        <div class="one-article">
        	<?php echo get_the_post_thumbnail( get_the_ID() ); ?>
				     <div class="article-text">
				      <div class="article-title">
				      	<h2><?php the_title(); ?>
				       </h2>
				      </div>
				      <div class="article-description"><?php the_content(); ?></div>
				      <a href="<?php the_permalink(); ?>" class="article-btn">read more</a>
				     </div>
        </div>
       </div>
   		 <?php endwhile; ?>
 			  <?php endif;
			  	wp_reset_postdata() ?>
					</div>
			 <hr class="content-hr">
			</div>
	</section>

<?php get_footer(); ?>