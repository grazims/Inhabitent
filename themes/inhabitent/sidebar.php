<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */


if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;

}
?>

<div id="secondary" class="widget-area" role="complementary">
	<p class="caixaalta">CONTACT INFO</p>	

		<a href="tel: 7784567891"><i class="phone"></i>
	<span>778-456-7891</span></a> 
	<br>
	<a href="mailto: info@inhabitent.com"><i class="email"></i>
	<span>info@inhabitent.com</span></a>
	
	<p>1490 W Broadway
	Vancouver, BC V6H 1H5</p>

	<p class="caixaalta">BUSINESS HOURS</p>

	<p> <span class="heavy">Monday-Friday:</span> 9am to 5pm</p>

	<p> <span class="heavy">Saturday:</span> 10am to 2pm</p>

	<p> <span class="heavy">Sunday:</span> Closed</p>

<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->

