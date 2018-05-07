<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;

$carte = CCarte::getById($post->ID);
$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
// <h2 class="page-title title"><?php  echo $carte->title;  </h2>
?>
<div class="row">
    <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>  page-intern">
        <div class="main-contents">
        
            <p><?php  echo $carte->content; ?> </p>
            <?php  if( $paraph1->title ) : ?>
            <h2 class="page-title title">
                    <?php  echo  $paraph1->title; ?>
            </h2>
            <?php endif; ?>
            <?php  if( $paraph1->content ) : ?>
                <p><?php  echo $paraph1->content; ?> </p>
            <?php endif; ?>

            <?php $image = $paraph1->image; $size = 'full'; if( $image ) : ?>
            <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>

            <?php  if( $paraph2->title ) : ?>
             <h2 class="page-title title">
                    <?php  echo  $paraph2->title; ?>
            </h2>
            <?php endif; ?>
            <?php  if( $paraph2->content ) : ?>
            <p><?php  echo $paraph2->content; ?> </p>
            <?php endif; ?>

            <?php $image = $paraph2->image; $size = 'full'; if( $image ) : ?>
            <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>

            <?php  if( $paraph3->title ) : ?>
             <h2 class="page-title title">
                    <?php  echo  $paraph3->title; ?>
            </h2>
            <?php endif; ?>
            <?php  if( $paraph3->content ) : ?>
            <p><?php  echo $paraph3->content; ?> </p>
            <?php endif; ?>

            <?php $image = $paraph3->image; $size = 'full'; if( $image ) : ?>
            <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>
            
        </div>
    </div>
    <?php
        get_sidebar( );
    ?>
</div>
<?php
get_footer();
