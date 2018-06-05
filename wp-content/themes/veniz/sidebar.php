<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */ ?>

<?php
global $post;
if ( ! is_active_sidebar( 'sidebar-1' ) || ! shapely_show_sidebar() ) {
	return;
}
?>
<div class="sidebar <?php if( is_page(14)) { echo 'no-booking-widget'; } ?>">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<!-- #secondary -->