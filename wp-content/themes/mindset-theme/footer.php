<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

// Retrieve the physical address and email from ACF fields
$physical_address = '';
$email = '';


if ( function_exists( 'get_field' ) && ! is_page( 17 ) ) {
    $physical_address = get_field( 'physical_address' , 17);
    $email = get_field( 'email' , 17);
}
?>

<footer id="colophon" class="site-footer">
    <div class="footer-contact">
        <?php if ( $physical_address ) : ?>
            <p><strong>Address:</strong> <?php echo esc_html( $physical_address ); ?></p>
        <?php endif; ?>

        <?php if ( $email ) : ?>
            <p><strong>Email:</strong> <a href="mailto:<?php echo  $email ; ?>"><?php echo $email; ?></a></p>
        <?php endif; ?>
    </div><!-- .footer-contact -->

    <div class="footer-menus">
        <nav id="footer-navigation" class="footer-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-left') ); ?>
        </nav>
        <nav id="footer-navigation" class="social-navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-right') ); ?>
        </nav>
    </div><!-- .footer-menus -->

    <div class="site-info">
        <?php esc_html_e( 'Created by ', 'fwd' ); ?><a href="<?php echo esc_url( __( 'https://chrishoornaert.com/', 'fwd' ) ); ?>"><?php esc_html_e( 'Chris Hoornaert | ', 'fwd' ); ?></a>
        <?php  the_privacy_policy_link(); ?> <br>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
