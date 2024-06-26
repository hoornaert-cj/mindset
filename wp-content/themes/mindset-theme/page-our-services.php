<?php
/**
 * The template for displaying all services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        // if (comments_open() || get_comments_number()) :
        //     comments_template();
        // endif;

    endwhile;
    ?>

<!-- display links to service posts farther down the page -->
<?php get_template_part('template-parts/service-categories'); ?>

<?php get_template_part('template-parts/work-categories'); ?>
</main>

<?php
get_sidebar();
get_footer();
?>
