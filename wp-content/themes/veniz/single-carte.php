<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;

$carte = CCarte::getById($post->ID);
//var_dump( CCarte::getById($post->ID));die;
?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
                <h2 class="page-title title"><?php  echo $carte->title; ?> </h2>
                <?php $image = $carte->thumbnail;  if( $image ) : ?>
                        <img src="<?php  echo $image ?>" alt="" srcset=" " class="full-width-img">
                  <?php endif; ?>               
                <p><?php echo $carte->content; ?></p>
                
                
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
