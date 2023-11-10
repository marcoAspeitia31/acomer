<?php
/**
 * Template part for displaying the breadcrumbs and the title in the pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acomer
 */

?>
<div class="col-lg-4 col-md-6">
	<div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
		<div class="image">
			<a href="<?php esc_url( the_permalink() ); ?>">
				<?php the_post_thumbnail( 'blog-grid', array( 'class' => 'img-fluid' ) ); ?>
			</a>
		</div>
		<div class="content">
			<a href="<?php esc_url( the_permalink() ); ?>">
				<h6><?php the_title(); ?></h6>
			</a>
			<ul class="d-flex align-item-center">
				<li><i class="fas fa-user"></i><?php acomer_posted_by(); ?></li>
				<li><i class="fas fa-comment"></i><?php acomer_posted_on(); ?></li>
			</ul>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php esc_url( the_permalink() ); ?>" class="read-more">Leer más</a>
		</div>
	</div>
</div>
