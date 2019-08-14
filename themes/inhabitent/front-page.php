<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<div class="container">
            <div class="logo">
            <img class="subcontainer" src="<?php echo get_template_directory_uri() . '/project-04/images/home-hero.jpg' ?> " alt="hero-photo"/>     
            <img class="front-p-logo" src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-full.svg' ?> " alt="inhabitent-logo"/>
                
       
            </div>
            
            <div class="shop-stuff-container">
                <h2>Shop Stuff</h2>
                    <div class="shop-subcontainer">
                        <div class="items">
            
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
                        <a href="" button class=""  ></a>


                        </div>   
                    </div>    
            </div>
            <div class="journal-area">
                <h2>Inhabitent Journal<h2>
                    <div class="journal-container">
                    <div class="news">
                    
                    <?php
          $blog_posts = get_posts(array(
            'post_type' => 'post',
			'posts_per_page' => 3,
		  ));
		  foreach ($blog_posts as $post) : setup_postdata($post);
		  get_template_part('template-parts/content-posts');
		  endforeach; wp_reset_postdata();
	  ?>

</div>   
        </div>

	</main><!-- #main --> 
	</div><!-- #primary -->

<?php get_footer(); ?>