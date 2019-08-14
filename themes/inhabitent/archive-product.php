<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="title">Shop Stuff </h1>
				<?php
					$terms = get_terms( array(
						'taxonomy' => 'product_type',
						'hide_empty' => false,
					) );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						echo '<ul class="list-dot">';
						foreach ( $terms as $term ) {
							echo '<li>', '<p class="subtitle">'; 
							echo '<a href=" ' . esc_url( get_term_link( $term ) ) .' ">' . $term->name . '</a>';
							echo '</li>', '</p>';
						}
						echo '</ul>';
					}

				?>
			</header><!-- .page-header -->


			<?php /* Start the Loop */ ?>
			<?php 
				$the_query = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => 16,
				)); 
				?>
				<div class="grid-container">
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="entry-title">
					<?php get_template_part( 'template-parts/content-product', 'product' ); ?>
			</div>
				<?php endwhile; ?>
				
				</div>
				<?php else : ?>
				<p><?php get_template_part( 'template-parts/content', 'none' ); ?></p>
				<?php endif; ?> 
			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>