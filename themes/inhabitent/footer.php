<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer style="background: url(<?= get_stylesheet_directory_uri() . '/images/dark-wood.png'; ?>)" id="colophon" class="site-footer" role="contentinfo">
				<!-- <div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div>.site-info  -->
					<div class="footer-container">
						<div class="block">
							<h3> CONTACT INFO</h3>
							<p>
							<i class="fa fa-envelope"></i>
							<a href="mailto: info@inhabitent.com" class="email">
							<span class="footer-info">info@inhabitent.com</span></a>
							</p>
							<p>
							<i class="fa fa-phone-alt"></i>	
							<a href="tel: 7784567891" class="phone">
							<span class="footer-info">778-456-7891</span></a> 
							</p>

								<div class="medias">
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fab fa-google-plus-square"></i>
								</div>

						</div>
						<div class="block">
							<h3>BUSINESS HOURS</h3>
							<p><span class="span">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="span">Saturday:</span> 10am to 2pm</p>
							<p><span class="span">Sunday:</span> Closed</p>
						</div>

						<div class="block3">
						<a href="#" rel="home" class="logofooter"><img class="logofooter" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg' ?> " alt="logo-footer"/></a>
						</div>	
					</div>


			<div class="copyright">
							<p>COPYRIGHT © 2019 INHABITENT</p>
						</div>

			</footer><!-- #colophon --> 

		<?php wp_footer(); ?>
	</body>
</html>
