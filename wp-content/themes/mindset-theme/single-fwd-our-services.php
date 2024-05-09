<?php
/**
 * The template for displaying single posts of the fwd-service post type
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        // Display post title
        the_title('<h1 class="entry-title">', '</h1>');

        // Display post content
        the_content();


        // // Display navigation to next/previous post
        // the_post_navigation(array(
        //     'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'fwd') . '</span> <span class="nav-title">%title</span>',
        //     'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'fwd') . '</span> <span class="nav-title">%title</span>',
        // ));

    endwhile; // End of the loop.
    ?>

</main><!-- #primary -->

<?php
get_footer();
?>
