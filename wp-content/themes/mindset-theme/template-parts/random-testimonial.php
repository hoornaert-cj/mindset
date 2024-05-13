<?php

$args = array(
    'post_type'      => 'fwd-testimonial',
    'posts_per_page' => 1,
    'orderby'        => 'rand',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<section class="rand-testimonial">';
    while ($query->have_posts()) :
        $query->the_post(); ?>

        <article>
            <h3>What They Say</h3>
            <div class="testimonial-content">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile;
    echo '</section>';
endif;


?>


