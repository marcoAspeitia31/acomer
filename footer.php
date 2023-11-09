<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acomer
 */

?>
	<!-- start footer area -->
    <footer id="colophon" class="site-footer footer" data-img="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-bg.jpg">
        <!-- start footer-top area -->
        <section class="footer-top pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>Get in Touch</h5>
                            </div>
                            <p class="desc">Lorem ipsum dolor sit am co adipisicing elit, sed do eiusmod tempor</p>
                            <ul class="address">
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Merlo Uruguay</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>+598 99 955 311</p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="far fa-envelope"></i>
                                    <p>hola@acomer.app</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>Enlaces rápidos</h5>
                            </div>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'secondary-menu',
								'menu_class' => 'navigation',
								'menu_id' => 'secondary-navigation'
							) );
							?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>Suscríbete</h5>
                            </div>
                            <p>Mantente al tanto de nuestras noticias a través de nuestra newsletter</p>
                            <div class="form-area">
                                <input type="email" placeholder="your email" class="inputs">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </div>
                            <ul class="d-flex social">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-top area -->

        <!-- start footer-bottom area -->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Copyright &copy; 2023 Al Right Reserved</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-end">
                                        <?php
                                        /* translators: 1: Theme name, 2: Theme author. */
                                        printf( esc_html__( 'Diseño realizado por %1$s.', 'acomer' ), '<a href="https://devitm.com/">DevITM</a>' );
                                        ?>
                                    </p>									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-bottom area -->
    </footer>
    <!-- end footer area -->

	<!-- start custom cursor area -->
    <div class="custom-cursor">
        <div id="cursor">
          <div id="cursor-ball"></div>
        </div>
    </div>
    <!-- end custom cursor area -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
