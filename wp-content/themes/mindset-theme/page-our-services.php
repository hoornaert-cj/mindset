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
	    <!-- Display links to fwd-service posts -->
		<?php
    $args = array(
        'post_type'      => 'fwd-service',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    );
    $query = new WP_Query($args);

    // Check if there are any posts
    if ($query->have_posts()) :
    ?>
        <section class="services-links">
            <ul>
                <?php
                // Start the loop
                while ($query->have_posts()) :
                    $query->the_post();
                ?>
                    <li><a href="#<?php the_ID(); ?>"><?php the_title(); ?></a></li>
                <?php
                endwhile;
                ?>
            </ul>
        </section>
    <?php
        wp_reset_postdata();
    else :
        // If no services found
        echo '<p>No services found.</p>';
    endif;
    ?>

    <!-- Display fwd-service posts -->
    <?php
    $args = array(
        'post_type'      => 'fwd-service',
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
    );
    $query = new WP_Query($args);

    // Check if there are any posts
    if ($query->have_posts()) :
    ?>
        <section class="services-wrapper">
            <?php
            while ($query->have_posts()) :
                $query->the_post();
            ?>
             <article>
   				 <h2 id="<?php echo esc_attr(get_the_ID()); ?>"><?php the_title(); ?></h2>
    			<section class="services-content">
       			 <?php
        		// display content of the textarea field
        		$service_desc = get_field('service_description');
        		if ($service_desc ) {
            		echo '<div class="service_description">' . wpautop($service_desc) . '</div>';
        }
        ?>
    </section>
</article>
            <?php
            endwhile;
            ?>
        </section>
    <?php
        wp_reset_postdata();
    else :
  		return;
    endif;
    ?>

</main>

<?php
get_sidebar();
get_footer();
?>
