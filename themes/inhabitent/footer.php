<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<!-- <div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div>.site-info  -->
					<div class="colum">
						<div class="block">
							<h3> CONTACT INFO</h3>
							<p>
							<i class="fas fa-envelope"></i>
							<a href="mailto: info@inhabitent.com"><i class="email"></i>
							<span class="footer-info">info@inhabitent.com</span></a>
							</p>
							<p>
							<i class="fas fa-phone-alt"></i>	
							<a href="tel: 7784567891"><i class="phone"></i>
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
							<p>Monday-Friday: 9am to 5pm</p>
							<p>Saturday: 10am to 2pm</p>
							<p>Sunday: Closed</p>
						</div>



						<img class="" src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-text.svg' ?> " alt="ji"/>
            </div>


			<div class="copyright">
							<p>COPYRIGHT © 2019 INHABITENT</p>
						</div>

			</footer><!-- #colophon --> 

		<?php wp_footer(); ?>
	</body>
</html>
