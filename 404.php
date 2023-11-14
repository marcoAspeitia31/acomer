<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package acomer
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">

			<!-- start page-header -->
			<header class="entry-header inner-page banner page-header" data-img="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/inner/error-404-acomer.jpg">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="content text-center">
									<h1 class="page-title">Error 404</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="container my-5">
				<div class="row justify-content-center text-center">
					<div class="col-lg-8">
						<div class="page-content my-0">
							<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acomer' ); ?></h3>
							<p class="mb-4"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acomer' ); ?></p>
							<?php get_search_form(); ?>
							<p class="my-4"><?php esc_html_e( 'Or', 'acomer' ); ?></p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary py-3 px-5"><?php esc_html_e( 'Go to home page', 'acomer' ); ?></a>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
			<!-- end page-header -->
			
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
