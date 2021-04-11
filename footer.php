<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blue-owl
 */

?>

	</div><!-- #content -->
	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<h2>Navigation</h2>
						<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-2',
										'menu_id'        => 'footer-menu',
									) );
									?>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<h2>Contacts</h2>
					<ul class="footer-contact">
						<li>
						 <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cell.png" alt="call">
						 <a href="tel:+7925678745">	
						 		<?php $telephone = get_option('twentysixteen_theme_options'); echo $telephone['text_test']; ?>
						 	</a>
					 </li>
					 <li>
						 <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mail-footer.png" alt="mail" class="mail-icon">
						 <a href="mailto:contact@blueowlcreative.com">
        		<?php $mail = get_option('twentysixteen_theme_options'); echo $mail['mail_scheme']; ?>
						 </a>
					 </li>
					 <li>
						 <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map.png" alt="map">
						 <p><?php $mail = get_option('twentysixteen_theme_options'); echo $mail['mail_scheme2']; ?></p>
					 </li>
					</ul>
				</div>
				<div class="col-lg-5 col-12">
					<?php echo do_shortcode('[contact-form-7 id="33" title="footer-form"]'); ?>
				</div>
			</div>
		 <div class="row">
		 	<ul class="footer-social">
		 		<li>
		 			<a href="#">
		 						<i class="fab fa-pinterest-p"></i>
		 			</a>
		 	 </li>
		 		<li>
		 			<a href="#">
		 						<i class="fab fa-google"></i>
		 			</a>
		 	 </li>
		 			<li>
		 			<a href="#">
		 						<i class="fab fa-twitter"></i>
		 			</a>
		 	 </li>
		 			<li>
		 			<a href="#">
		 						<i class="fab fa-facebook-f"></i>
		 			</a>
		 	 </li>
		 			<li>
		 			<a href="#">
		 						<i class="fab fa-skype"></i>
		 			</a>
		 	 </li>
		 	</ul>
		 </div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p>© Copyright 2013  | Powered By WordPress</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
