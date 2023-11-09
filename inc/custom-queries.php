<?php
/**
 * Custom queries for acomer theme
 * 
 * @package acomer
 */

//Testimonials
if( ! function_exists( 'acomer_testimonials' ) ) {

    /**
     * This functions retrieves testimonials post type
     * 
     * @since 1.0.0
     */
    function acomer_testimonials() {

        $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 5
        );
        
        $testimonials = new WP_Query( $args );

        return $testimonials;

    }

}