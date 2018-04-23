<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */ ?>

<?php
if ( ! is_active_sidebar( 'sidebar-1' ) || ! shapely_show_sidebar() ) {
	return;
}
?>


	<?php dynamic_sidebar( 'sidebar-1' );
       ?>
<!-- #secondary -->

