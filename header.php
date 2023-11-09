<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acomer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- start preloader area -->
<div class="preloader">
	<div class="circle1"></div>
	<div class="circle2"></div>
</div>
<!-- end preloader area -->

<!-- start top-tp button area -->
<button class="top-btn">
	<i class="fas fa-chevron-up"></i>
</button>
<!-- end top-tp button area -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'acomer' ); ?></a>

	<!-- start header area -->
	<header id="masthead" class="site-header">
		<!-- start menubar area -->
		<section class="menubar main-navigation">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar p-0">
							<!-- header logo -->
							<a class="navbar-brand p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="Logo" />
							</a>
							<?php
							wp_nav_menu(
								array(
									'menu_id'         => 'primary-menu',
									'menu_class'      => 'menu',
									'theme_location'  => 'primary-menu',
									'container'       => 'div',
									'container_class' => 'header-menu position-static',
									'container_id'    => 'site-navigation',
								) 
							);
							?>
							<div class="right-part">
								<ul class="d-flex align-items-center">
									<li>
										<button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="flaticon-loupe"></i></button>
									</li>
									<li><a href="contact.html">try for free</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- end menubar area -->
	</header>
	<!-- end header area -->

