<?php
/*
Template Name: Mentions page
Template Post Type: post, page
*/
get_header(); 
$pageid = get_the_id();

$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
?>

<?php $layout_class = shapely_get_layout_class(); ?>
<div class="row">
    <div id="primary" class="col-md-12 mb-xs-24">
        <div class="fix_wrapper centered">
            <h2  class="title dino">
                <?php  echo  $paraph1->title; ?>
            </h2>
            <p><?php  echo $paraph1->content; ?> </p>
            <?php $image = $paraph1->image; $size = 'full'; if( $image ) : ?>
            <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>
            <h2  class="title dino">
                <?php  echo  $paraph2->title; ?>
            </h2>
            <p><?php  echo $paraph2->content; ?> </p>
            <?php $image = $paraph2->image; $size = 'full'; if( $image ) : ?>
            <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>
            <h2  class="title dino">
                <?php  echo  $paraph3->title; ?>
            </h2>
            <p><?php  echo $paraph3->content; ?> </p>
            <?php $image = $paraph3->image; $size = 'full'; if( $image ) : ?>
            <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
            <?php endif; ?>
        </div>
    </div><!-- #primary -->
</div>
<?php
get_footer();