<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>

		<a href="<?php echo esc_url( get_the_permalink()); ?>" rel="bookmark">
			<div class="product-thumb" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
				
			</div>
			<div class="price">
						<div class="price-link">
							<span><?php the_title() ?></span>
							<span><?php echo CFS()->get( 'price' ); ?></span>
						</div>
				</div>
		</a>

		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- .entry-content -->
</article><!-- #post-## -->
