<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        // Check if ACF function exists and if we are on the Contact page
        if ( function_exists( 'get_field' ) && is_page( 'contact' ) ) :
    ?>
            <section class="contact-details">
                <h2>Contact Details</h2>
                <?php
                // Display the ACF fields
                $physical_address = get_field( 'physical_address' );
                if ( $physical_address ) :
                    echo '<p><strong>Address:</strong> ' . esc_html( $physical_address ) . '</p>';
                endif;

                $email = get_field( 'email' );
                if ( $email ) :
                    echo '<p><strong>Email:</strong> <a href="mailto:' . $email  . '">' . $email  . '</a></p>';
                endif;
                ?>
            </section>
    <?php
        endif;
    endwhile; // End of the loop.
    ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
