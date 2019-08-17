<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="news">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		</header>

		<div class="journal-content">
			<?php endif; ?>
					
			<?php if ( 'post' === get_post_type() ) : ?>
				<p class="journal-date"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
			<?php endif; ?>

			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	
			<a class="button-journal" href="<?php the_permalink(); ?>">Read Entry</a></h3>
		</div>
	 
	</article><!-- #post-## -->
</div>