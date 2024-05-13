<?php
/**
 * The template for displaying the Home page
 * call the Home page "front-page.php" and not "page-front.php"
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        // get_template_part( 'template-parts/content', 'page' );
        ?>
        <!-- closing the PHP tag so that sections can be created without echoes -->
        <section class="home-intro"></section>
        <?php the_post_thumbnail('large'); ?>
        <?php if ( function_exists( 'get_field' ) ) {
            if ( get_field( 'top_section' ) ) {
                the_field( 'top_section' );
            }
        }
        ?>

        <section class="home-work"></section>
        <h2>Featured Works</h2>
        <?php
		$args = array(
		    'post_type'      => 'fwd-work',
		    'posts_per_page' => 4,
            'tax_query'             => array(
                array(
                    'taxonomy' => 'fwd-featured',
                    'field'               => 'slug',
                    'terms'             => 'front-page'
                )
            )
		);
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) {
		    while( $query->have_posts() ) {
		        $query->the_post();
		        ?>
		        <article>
		            <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
		                <h3><?php the_title(); ?></h3>
		            </a>
		        </article>
		        <?php
		    }
		    wp_reset_postdata();
		}
		?>

        <section class="home-work"></section>

        <section class="home-left"></section>
        <?php if ( function_exists( 'get_field' ) ) {
            if ( get_field( 'left_section_heading' ) ) {
                echo '<h2>';
                the_field( 'left_section_heading' );
                echo '</h2>';
            if(get_field('left_section_content')) {
                echo '<p>';
                the_field( 'left_section_content' );
                echo '</p>';
                }
            }
        }
        ?>
        <section class="home-right"></section>
            <?php if ( function_exists( 'get_field' ) ) {
                if ( get_field( 'right_section_heading' ) ) {
                    echo '<h2>';
                    the_field( 'right_section_heading' );
                    echo '</h2>';
                if(get_field('right_section_content')) {
                    echo '<p>';
                    the_field( 'right_section_content' );
                    echo '</p>';
                 }
            }
        }
        ?>
        <section class="home-slider"></section>

        <section class="home-blog">
            <h2><?php esc_html_e( 'Latest Blog Posts', 'fwd' ); ?></h2>
            <?php
                $args = array(
                    'post_type'        => 'post',
                    'posts_per_page'   => 4
                );
                $blog_query = new WP_Query($args);
                if( $blog_query -> have_posts() ) {
                    while( $blog_query -> have_posts() ) {
                        $blog_query -> the_post();
                        ?>
                        <article>
						<?php if ( has_post_thumbnail() ) : ?>
        					<a href="<?php the_permalink(); ?>">
            			<?php the_post_thumbnail( 'latest-blog' ); ?>
        				</a>
    					<?php endif; ?>
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo get_the_date( 'Y-m-d' ); ?></p>
                            </a>
                        </article>
                        <?php
                    }
                    wp_reset_postdata();
                }
            ?>
        </section>
        <?php
    endwhile; // End of the loop.
    ?>

</main><!-- #primary -->

<!-- leave PHP open at the end of WordPress files -->
<?php
get_sidebar();
get_footer();
?>
