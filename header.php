<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link 
 *
 * @package 
 */

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header>
		<div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-12 ml-md-auto">
						<div class="header-phone">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/call.png" alt="call">
							<a href="tel:+7925678745">
								<?php $telephone = get_option('twentysixteen_theme_options'); echo $telephone['text_test']; ?>
							</a>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-12">
						<div class="header-mail">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/mail.png" alt="mail">
							 <a href="mailto:contact@blueowlcreative.com">
							 <?php $mail = get_option('twentysixteen_theme_options'); echo $mail['mail_scheme']; ?>
							 </a>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-nav">
			<div class="container">
				<div class="row">
						<div class="col-lg-4 col-md-8 col-10">
							<div class="logo">
								<a href="#"><?php bloginfo( 'name' ); ?></a>
							</div>
						</div>
						<div class="col-lg-8 col-md-4 col-2">
							<div class="menu menu-collaps d-none d-lg-block">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
							</div>
							<!-- mobile -->
        <div class="d-lg-none">
         <div class="mobile">
           <div class="head-humburger  d-flex d-lg-none">
            <a href="#">
             <img class="hamburger" src="<?php echo bloginfo('template_url'); ?>/assets/img/hamburger.png" alt="menu">
            </a>
           </div> 
         </div>
     			</div>  
       <!-- end -->
						</div>
				</div>
			</div>
		</div>
 </header>

	<div id="content" class="site-content">
 



 