
<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="journal-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><div class="int-text">', esc_url( get_permalink() ) ), '</div></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<p class="journal-date"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></p>
		</div>
		<?php endif; ?>
</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<div class="post-info">
		<p>Posted in &rarr; <?php the_category('<p>, '); ?> </p>
		<p class="tagged-in"><?php the_tags('Tagged &rarr; '); ?></p>
	</div>
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

	