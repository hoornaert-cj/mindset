<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<body <?php body_class('archive-fwd-work'); ?>>
<main id="primary" class="site-main">
	<h1>Works</h1>

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
$args = array(
    'post_type'      => 'fwd-work',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array (
            'taxonomy' => 'fwd-work-category',
            'field'    => 'slug',
            'terms'    => 'web'
        ),
    ),
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>
    <section class="work-section">
        <h2><?php esc_html_e( 'Web', 'fwd' ); ?></h2>
        <section class="work-articles">
            <?php
            while( $query->have_posts() ) :
                $query->the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                    <?php the_excerpt();?>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </section>
    </section>
<?php endif;

$args = array(
    'post_type'      => 'fwd-work',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array (
            'taxonomy' => 'fwd-work-category',
            'field'    => 'slug',
            'terms'    => 'photo'
        ),
    ),
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>
    <section class="work-section">
        <h2><?php esc_html_e( 'Photo', 'fwd' ); ?></h2>
        <section class="work-articles">
        <?php
        while( $query->have_posts() ) :
            $query->the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <?php the_post_thumbnail('large'); ?>
                </a>
                <?php the_excerpt();?>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
        </section>
    </section>
    <?php
endif;
		?>
	<?php else :

		get_template_part( 'template-parts/content', 'none' );

	endif;

	?>
</main>


<?php
// get_sidebar();
get_footer();
