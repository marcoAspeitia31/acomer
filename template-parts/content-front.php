<?php
/**
 * Template part for displaying the front-page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acomer
 */

?>

<!-- start banner area -->
<section class="home1 banner" data-img="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/banner/banner-bg-2.png">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<div class="row">
						<div class="col-lg-7 order-1 order-lg-0">
							<div class="text-area">
								<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s"><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_banner_title', true ) ); ?></h1>
								<p class="wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s"><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_banner_slogan', true ) ); ?></p>
								<ul class="d-flex wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
									<li>
										<a target="_blank" href="<?php echo esc_url( get_post_meta( get_the_ID(), 'front_page_banner_app_store_url', true ) ); ?>">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/banner/appstore-2.png" alt="Apple Store">
										</a>
									</li>
									<li>
										<a target="_blank" href="<?php echo esc_url( get_post_meta( get_the_ID(), 'front_page_banner_google_play_url', true ) ); ?>">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/banner/playstore-1.png" alt="Play Store">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-5 order-0 order-lg-1">
							<div class="image-area text-end wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
								<?php
								echo wp_get_attachment_image( 
									get_post_meta( get_the_ID(), 'front_page_banner_picture_id', true ),
									'full',
									false,
									array(
										'class' => 'img-fluid',
									)
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end banner area -->

<!-- start feature area -->
<section class="home1 feature p-120">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
				<div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
					<h2><?php echo esc_html( get_post_meta( get_the_id(), 'front_page_features_title', true ) ); ?></h2>
					<p><?php echo esc_html( get_post_meta( get_the_id(), 'front_page_features_content', true ) ); ?></p>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row justify-content-center">
					<?php
					$features = get_post_meta( get_the_ID(), 'front_page_features_features', true );

					if ( ! empty( $features ) ) :

						foreach ( $features as $feature ) :
							?>
							<div class="col-lg-4 col-md-6">
								<div class="item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
									<?php if ( array_key_exists( 'icon', $feature ) ) : ?>
										<div class="icon">
											<i class="<?php echo esc_attr( $feature['icon'] ); ?>"></i>
										</div>
									<?php endif; ?>
									<h5><?php echo array_key_exists( 'title', $feature ) ? esc_html( $feature['title'] ) : ''; ?></h5>
									<p><?php echo array_key_exists( 'content', $feature ) ? esc_html( $feature['content'] ) : ''; ?></p>
								</div>
							</div>
							<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end feature area -->

<!-- start counter area -->
<section class="home1 counter p-100" data-img="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/count/bg.jpg">
	<div class="overlay">
		<div class="container">
			<div class="row justify-content-center">
				<?php
				$counters = get_post_meta( get_the_ID(), 'front_page_counter_counters', true );

				if ( ! empty( $counters ) ) :
					foreach ( $counters as $counter ) :
						?>
						<div class="col-lg-3 col-md-6">
							<div class="item item1 text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
								<h4><?php echo array_key_exists( 'title', $counter ) ? esc_html( $counter['title'] ) : ''; ?></h4>
								<h2 class="odometer odometer-auto-theme" data-count="<?php echo esc_attr( $counter['number'] ); ?>">0000</h2>
							</div>
						</div>
						<?php
					endforeach;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<!-- end counter area -->

<!-- start about area -->
<section class="home1 about p-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="image text-center wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
							<?php
							echo wp_get_attachment_image( 
								get_post_meta( get_the_ID(), 'front_page_first_info_picture_id', 'true' ),
								'full',
								true,
								array(
									'class' => 'img-fluid',
								)
							);
							?>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="content wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
							<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_first_info_title', true ) ); ?></h3>
							<p><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_first_info_content', true ) ); ?></p>
							<?php
							$stand_outs = get_post_meta( get_the_ID(), 'front_page_first_info_stand_out_information', true );
							if ( ! empty( $stand_outs ) ) :
								?>
								<ul>
									<?php foreach ( $stand_outs as $information ) : ?>
										<li class="d-flex">
											<?php if ( array_key_exists( 'icon', $information ) ) : ?>
												<div class="icon">
													<i class="<?php echo esc_attr( $information['icon'] ); ?>"></i>
												</div>
											<?php endif; ?>
											<div class="text">
												<h6><?php echo esc_html( $information['title'] ); ?></h6>
												<p><?php echo esc_html( $information['content'] ); ?></p>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 pt-120">
				<div class="row align-items-center">
					<div class="col-lg-7 order-1 order-lg-0">
						<div class="content wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1s">
							<h3><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_second_info_title', true ) ); ?></h3>
							<p><?php echo esc_html( get_post_meta( get_the_ID(), 'front_page_second_info_content', true ) ); ?></p>
							<?php
							$stand_outs_two = get_post_meta( get_the_ID(), 'front_page_second_info_stand_out_information', true );
							if ( ! empty( $stand_outs_two ) ) :
								?>
								<ul>
									<?php foreach ( $stand_outs_two as $information ) : ?>
										<li class="d-flex">
											<?php if ( array_key_exists( 'icon', $information ) ) : ?>
												<div class="icon">
													<i class="<?php echo esc_attr( $information['icon'] ); ?>"></i>
												</div>
											<?php endif; ?>
											<div class="text">
												<h6><?php echo esc_html( $information['title'] ); ?></h6>
												<p><?php echo esc_html( $information['content'] ); ?></p>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
								<?php
							endif;
							?>
						</div>
					</div>
					<div class="col-lg-5 order-0 order-lg-1">
						<div class="image text-center wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1s">
							<?php
							echo wp_get_attachment_image( 
								get_post_meta( get_the_ID(), 'front_page_second_info_picture_id', 'true' ),
								'full',
								true,
								array(
									'class' => 'img-fluid',
								)
							);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end about area -->

<!-- start mobile area -->
<section class="home1 mobile">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bg wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
					<div class="row">
						<div class="col-lg-5">
							<div class="image">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/img-cta-1.png" alt="Mobile">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="content">
								<h3>Get Mobile App Only Here</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
								<ul class="d-flex">
									<li>
										<a href="#!">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/banner/applestore.png" alt="Apple Store">
										</a>
									</li>
									<li>
										<a href="#!">
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/banner/playstore.png" alt="Play Store">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end mobile area -->

<!-- start video area -->
<section class="home1 video" data-img="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/video-img-bg.jpg">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content text-center">
						<a class="vid-icon venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=LCmsrVOXzZc">
							<i class="fas fa-play"></i>
						</a>
						<p>working video</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end video area -->

<!-- start client area -->
<section class="home1 client p-120">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
				<div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
					<h2>customers love</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore et dolore magna aliqua. Ut enim ad minim to eismud </p>
				</div>
			</div>
			<?php
			$testimonials = acomer_testimonials();

			if ( $testimonials->have_posts() ) :
				?>
			<div class="col-lg-12">
				<div class="row align-items-center">
					<div class="col-lg-5 position-relative">
						<div class="wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
							<div class="shape"></div>
							<div class="client-img-slider swiper-container">
								<div class="swiper-wrapper">
									<?php
									while ( $testimonials->have_posts() ) :
										$testimonials->the_post();
										?>
										<div class="swiper-slide">
											<div class="image">
												<?php 
												echo wp_get_attachment_image(
													get_post_meta( get_the_ID(), 'testimonials_picture_id', true ),
													'testimonial-thumbnail',
													false,
													array(
														'class' => 'img-fluid',
													)
												);
												?>
											</div>
										</div>
										<?php
									endwhile;
									?>
								</div>
							</div>
						</div>
					</div>					
					<div class="col-lg-7">
						<div class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="1s">
							<div class="client-slider swiper-container">
								<div class="swiper-wrapper">
								<?php
								while ( $testimonials->have_posts() ) :
									$testimonials->the_post();
									?>
									<div class="item swiper-slide">
										<p><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonials_opinion', true ) ); ?></p>
										<h6><?php the_title(); ?></h6>
										<p class="designation"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonials_job_position', true ) ); ?></p>
									</div>
									<?php
								endwhile;
								?>
								</div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>					
				</div>
			</div>
				<?php
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<!-- end client area -->

<!-- start brand area -->
<section class="home1 brand p-100">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
					<a href="#!"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/brand/brand-logo1.png" class="img-fluid" alt="Brand Logo" /></a>
				</div>
			</div>
			<div class="col">
				<div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
					<a href="#!"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/brand/brand-logo2.png" class="img-fluid" alt="Brand Logo" /></a>
				</div>
			</div>
			<div class="col mt-sm-30">
				<div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
					<a href="#!"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/brand/brand-logo3.png" class="img-fluid" alt="Brand Logo" /></a>
				</div>
			</div>
			<div class="col mt-sm-30">
				<div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1s">
					<a href="#!"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/brand/brand-logo4.png" class="img-fluid" alt="Brand Logo" /></a>
				</div>
			</div>
			<div class="col mt-sm-30">
				<div class="brand-logo text-center wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
					<a href="#!"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home1/brand/brand-logo5.png" class="img-fluid" alt="Brand Logo" /></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end brand area -->
