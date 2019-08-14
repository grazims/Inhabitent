<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="site-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="shop-content">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>

			</div>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class="price"><?php echo CFS()->get( 'price' ); ?></p>
			<?php the_content(); ?>
		
			<div class="social">
				<button type="button" class="social-button">
				<i class="fa fa-facebook"></i>	
				Like</button>
				
				<button type="button" class="social-button">
				<i class="fa fa-twitter"></i>	
				Tweet</button>

				<button type="button" class="social-button">
				<i class="fa fa-pinterest"></i>	
				Pin</button>
			</div>
		</div>
		<!-- .entry-content -->
	</article><!-- #post-## -->
</div>