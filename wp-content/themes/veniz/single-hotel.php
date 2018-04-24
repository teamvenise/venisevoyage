<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;

$hotel = CHotel::getById($post->ID);
//var_dump( CCarte::getById($post->ID));die;
?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
               
                <?php $image = $hotel->thumbnail;  if( $image ) : ?>
                        <img src="<?php echo CHotel::getHotelImage($hotel->thumbnail);  ?>" />
                  <?php endif; ?>               
                <p><?php echo $hotel->content; ?></p>
                
                
            </div>            
        </div>
        <?php
        if ( $layout_class == 'sidebar-right' ):
                get_sidebar();
        endif;
       ?>
	</div>
<?php
get_footer();
