<?php
/**
 * Template part for displaying the breadcrumbs and the title in the pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acomer
 */

?>
<!-- start banner area -->
<header class="entry-header inner-page banner" data-img="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content text-center">
						<h1><?php echo esc_html( is_single() ? the_title() : get_the_title( get_option( 'page_for_posts', true ) ) ); ?></h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
								<li class="breadcrumb-item"><a href="<?php echo esc_url( get_the_permalink( get_option( 'page_for_posts', true ) ) ); ?>"><?php echo esc_html( get_the_title( get_option( 'page_for_posts', true ) ) ); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( the_title() ); ?></li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- end banner area -->
