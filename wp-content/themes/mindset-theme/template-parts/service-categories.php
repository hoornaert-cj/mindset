<?php
$taxonomy = 'service-type';

$terms = get_terms(array(
    'taxonomy' => $taxonomy,
));

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo '<h2>' . $term->name . '</h2>';

        // Define args for WP_Query
        $args = array(
            'post_type'      => 'fwd-service',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
            'tax_query'      => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                ),
            ),
        );

        // Query posts based on the current term
        $query = new WP_Query($args);

        // Check if there are any posts
        if ($query->have_posts()) :
            echo '<section class="services-wrapper">';
            while ($query->have_posts()) :
                $query->the_post();
            ?>
                <article>
                    <h3 id="<?php echo esc_attr(get_the_ID()); ?>"><?php the_title(); ?></h3>
                    <section class="services-content">
                        <?php
                        // display content of the textarea field
                        $service_desc = get_field('service_description');
                        if ($service_desc) {
                            echo '<div class="service_description">' . $service_desc . '</div>';
                        }
                        ?>
                    </section>
                </article>
            <?php
            endwhile;
            echo '</section>';
            wp_reset_postdata();
        else :
            echo '<p>No services found.</p>';
        endif;
    }
}
?>
