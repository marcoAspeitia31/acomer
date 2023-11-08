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
<header class="entry-header inner-page banner" data-img="<?php echo esc_url( the_post_thumbnail_url( 'full' ) );?>">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content text-center">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end banner area -->