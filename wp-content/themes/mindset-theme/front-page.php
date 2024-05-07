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
			<section class="home-work"></section>

			<section class="home-work"></section>

			<section class="home-left"></section>

			<section class="home-right"></section>

			<section class="home-slider"></section>

			<section class="home-blog">
				<h2><?php esc_html_e( 'Latest Blog Posts', 'fwd' ); ?></h2>
				<?php
					$args = array(
						'post_type' 			  => 'post',
						'posts_per_page'	=> 4
					);
					$blog_query = new WP_query($args);
					if( $blog_query -> have_posts() ) {
						while( $blog_query -> have_posts() ) {
							//browser will crash if you writhe postS instead of post
							$blog_query -> the_post();

							?>
							<article>
								<a href="<?php the_permalink(); ?>">
									<h3><?php the_title(); ?></h3>
									<?php the_date( '', '<p>', '</p>' ); ?>
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
