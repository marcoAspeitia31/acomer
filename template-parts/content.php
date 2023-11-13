<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acomer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( is_single() ) :
		get_template_part( 'template-parts/single/single', 'breadcrumbs' );
	endif;
	?>

	<!-- start blog area -->
	<section class="blog-page blog-detail p-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<!-- blog area -->
						<div class="col-xl-9 col-lg-8 all order-1 order-lg-0">
							<div class="entry-content content">
								<!-- blog image -->
								<div class="blog-img wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
									<?php the_post_thumbnail( 'blog-detail' ); ?>
									<div class="option">
										<p><?php echo esc_html( get_the_date( 'M j Y' ) ); ?></p>
									</div>
								</div>
								<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'acomer' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);

								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acomer' ),
										'after'  => '</div>',
									)
								);
								?>
							</div><!-- .entry-content -->
							<footer class="entry-footer">
								<?php acomer_entry_footer(); ?>
							</footer><!-- .entry-footer -->

							<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'acomer' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'acomer' ) . '</span> <span class="nav-title">%title</span>',
								)
							);


							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end blog area -->

</article><!-- #post-<?php the_ID(); ?> -->

