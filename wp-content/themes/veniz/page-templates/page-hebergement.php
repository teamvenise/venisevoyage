<?php
/*
Template Name: hebergement-page
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class(); 
$pageid = get_the_id();

$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
$paraphFooter = CParagraphe::getFooterBy($pageid);

$hotels = CHotel::getBy(6, 'date', 'desc', null);
?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?> page-intern">
            <div class="main-contents">

                <div class="booking-component">
                  <h4 class="booking-title title dino"><strong class="yellow-text">Pour</strong> venise</h4>
                  <?php get_sidebar('top');?>
                </div>
                <h2>
                    <?php  echo  $paraph1->title; ?>
                </h2>
                 <p><?php  echo $paraph1->content; ?> </p>
                  <?php $image = $paraph1->image; $size = 'full'; if( $image ) : ?>
                        <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                  <?php endif; ?>
                        
                <h3><?php  echo  $paraph2->title; ?></h3>
                <p><?php  echo $paraph2->content; ?> </p>

                 <?php $image = $paraph2->image; $size = 'full'; if( $image ) : ?>
                        <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                 <?php endif; ?>

                <h3><?php  echo  $paraph3->title; ?></h3>
                <p><?php  echo $paraph3->content; ?> </p>
                 <?php $image = $paraph3->image; $size = 'full'; if( $image ) : ?>
                        <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                 <?php endif; ?>

                <h3><?php  echo $paraphFooter->title_footer;   ?></h3>

               
                <div id="hotels-list">
                    <div class="onRow">
                        <?php if (count($hotels) > 0) : ?>
                        <?php foreach ($hotels as $hotel): ?>
                        <a class="item" href="<?php echo get_permalink($hotel->id); ?>">
                            <span class="hotel-photo">
                                <img src="<?php echo CHotel::getHotelImage($hotel->thumbnail);  ?>" />
                            </span>
                            <span class="hotel_name"> <?php echo $hotel->title; ?></span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p ><?php echo $hotel->content; ?></p>
                            <button class="round-btn">Voir</button>
                        </a>
                         <?php endforeach; ?>
                        <?php endif;?>
                        
                    </div>              
                   
                </div>
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
