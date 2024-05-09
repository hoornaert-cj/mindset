<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php fwd_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();



		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fwd' ),
				'after'  => '</div>',
			)
		);
		?>

<section class="contact-details">
                <h2>Contact Details</h2>
                <?php
                $physical_address = get_field( 'physical_address' );
                if ( $physical_address ) :
                    echo '<p><strong>Address:</strong> ' . esc_html( $physical_address ) . '</p>';
                endif;

                $email = get_field( 'email' );
                if ( $email ) :
                    echo '<p><strong>Email:</strong> <a href="mailto:' . esc_url($email)  . '">' . esc_url($email)  . '</a></p>';
                endif;
                ?>
            </section>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fwd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
