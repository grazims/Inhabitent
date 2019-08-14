<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		

		<div class="entry-meta">
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<!-- .entry-content -->

	<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-single-product' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		


		<?php get_footer(); ?>

</article><!-- #post-## -->
