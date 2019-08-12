<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <header class="page-header">
                
                <?php
					single_term_title( '<h1 class="shop-title">' );
					
                ?>
                <?php
                the_archive_description('</h1>');
                ?>
                

		<!-- .entry-meta -->
	</header><!-- .entry-header -->

	<!-- .entry-content -->

	<?php while ( have_posts() ) : the_post(); ?>
	<div class="grid-container">
				<?php
					get_template_part( 'template-parts/content-product' );
				?>
</div>
			<?php endwhile; ?>
				
			<?php the_posts_navigation(); ?>


		<?php get_footer(); ?>

</article><!-- #post-## -->