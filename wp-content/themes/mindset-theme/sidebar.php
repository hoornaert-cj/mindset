<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

if ( is_page()) {
	// If it's a Page template, display sidebar-2
	$sidebar = 'sidebar-2';
} else {
	// Otherwise, display the default sidebar-1
	$sidebar = 'sidebar-1';
}

if ( ! is_active_sidebar( $sidebar ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
