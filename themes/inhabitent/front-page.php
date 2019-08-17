<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


            <div class="front-part" style="background: url(<?php echo get_template_directory_uri() . '/images/home-hero.jpg' ?>) no-repeat center top/cover">
            <img class="front-part-logo" src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg' ?> " alt="inhabitent-logo"/>
                
       
            </div>
            
            <div class="shop-stuff-container">
                <h2>Shop Stuff</h2>
                 
                    <?php $terms = get_terms( array( 'taxonomy' => 'product_type', 'hide_empty' => 0, ) ); 
                        
                        if ( ! empty( $terms ) ) : 
                    ?>
                            <div class="stuff-container">
                                <?php	foreach ( $terms as $term ) : 
                                ?>
                                    <div class="stuff-items">
                                        <img class="stuff-logo" src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . ".svg"; ?> "/>
                                            <p><?php echo $term->description; ?></p> 

                                        <a href="<?php echo get_term_link( $term ); ?>" class="btn">
                                                <?php echo $term->name; ?> Stuff </a>
                                    </div>
                                
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>       
            </div>

            <div class="journal-main-container">
                <h2>Inhabitent Journal</h2>
                <div class="journal-container">
                    <?php
                         $blog_posts = get_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                    )); ?>
                                
                                <?php
                        foreach ($blog_posts as $post) : setup_postdata($post);
                        get_template_part('template-parts/content-front-page');
                    endforeach; wp_reset_postdata();
                    ?>
                    </div>
            </div>

        </main><!-- #main --> 
	</div><!-- #primary -->

<?php get_footer(); ?>