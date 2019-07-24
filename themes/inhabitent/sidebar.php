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

	<i class="fas fa-phone-alt"></i>	
	<a href="tel: 7784567891"><i class="phone"></i>
	<span>778-456-7891</span></a> 
	<br>
	<i class="fas fa-envelope"></i>
	<a href="mailto: info@inhabitent.com"><i class="email"></i>
	<span>info@inhabitent.com</span></a>
	<br>
	<i class="fas fa-map-marker-alt"></i>
	<span>1490 W Broadway <br>
		Vancouver, BC V6H 1H5</span>

<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->

