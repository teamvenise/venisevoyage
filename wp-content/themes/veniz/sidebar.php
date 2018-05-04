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

<?php if($post->post_type == 'auberge') :    //dynamic_sidebar( 'sidebar-map' );?>
            <div id="map" style="width:305px;height:250px;margin-bottom:20px"></div>
<?php endif; ?>

            

	<div><?php dynamic_sidebar( 'sidebar-1' ); ?></div>

<!-- #secondary -->

