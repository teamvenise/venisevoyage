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
    <div class="booking-component">
        <h1 class="booking-title title dino"><strong class="yellow-text">Découvrez</strong> les meilleurs hotels à venise</h1>
        <?php get_sidebar('top');?>
    </div>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?> page-intern">
            <div class="main-contents hebergement-page">
                <?php  if( $paraph1->title ) : ?>
                    <h2 class="page-title">
                        <?php  echo  $paraph1->title; ?>
                    </h2>
                <?php endif; ?>

                <?php if( $paraph1->content ) : ?>
                    <p><?php  echo $paraph1->content; ?> </p>
                <?php endif; ?>

                <!-- <?php //$image = $paraph1->image; $size = 'full'; if( $image ) : ?>
                    <div class="photo"><img src="<?php //echo $image ?>" alt="" srcset=""> </div>
                <?php //endif; ?> -->

                <div class="encart-page">
                    <button class="round-btn">Reservez des maintenant</button>
                </div>

                <?php  if( $paraph2->title ) : ?>
                    <h3 class="subtitle"><?php  echo  $paraph2->title; ?> </h3>
                <?php endif; ?>
                
                <?php  if( $paraph2->content ) : ?>
                    <p><?php  echo $paraph2->content; ?></p>
                <?php endif; ?>

                <?php  if( $paraph3->title ) : ?>
                    <h3 class="subtitle">
                        <?php  echo  $paraph3->title; ?>
                    </h3>
                <?php endif; ?>

                <?php  if( $paraph3->content ) : ?>
                    <p><?php  echo $paraph3->content; ?> </p>
                <?php endif; ?>

                <h3 class="subtitle"><?php  echo $paraphFooter->title_footer;   ?></h3>

               
                <div id="hotels-list">
                    <div class="onRow">
                        <?php if (count($hotels) > 0) : ?>
                        <?php foreach ($hotels as $hotel): ?>
                        <div class="item">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/hotellist_img.jpg" alt="" srcset="">
                                <!-- <img src="<?php echo CHotel::getHotelImage($hotel->thumbnail);  ?>" /> -->
                            </span>
                            <div class="content-container">
                                <div class="hotel-all-detail clearfix">
                                    <div class="left">
                                        <span class="hotel_name">
                                            <?php echo $hotel->title; ?>
                                        </span>
                                        <div class="evaluation">
                                            <span class="stars">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset=""> 
                                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset="">                                 
                                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset="">                                 
                                                <!-- <input id="input-7-xs" class="rating rating-xs rating-loading" value="<?php echo $hotel->avis; ?>" data-min="0" data-max="5" data-step="0.5" data-size="xs" data-show-caption="false" data-readonly="true"> -->
                                            </span>
                                        </div>
                                        <div class="option clearfix">
                                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/wifi.png" alt="" srcset=""></i>
                                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/parking.png" alt="" srcset=""></i>
                                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/bar.png" alt="" srcset=""></i>
                                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/service_chambre.png" alt="" srcset=""></i>
                                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/heater.svg" alt="" srcset=""></i>
                                        </div>
                                        <div class="hotel-adresse">Sestiere Castello, 4971, 30122 Venezia VE, Italie</div>
                                        <div class="contenus">
                                            <!-- <p ><?php echo substr($hotel->extrait,0,400); ?>...</p>-->
                                            <p>Nulla et tempor mi. Aenean massa leo, sollicitudin vitae mattis sit amet, aliquam vel sapien. Mauris ultrices, neque nec porta auctor, elit nulla varius dolor.</p>
                                            <a class="btn" href="<?php echo get_permalink($hotel->id); ?>">Plus de details <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>                                    
                                    <div class="right price-section">
                                        À partir de
                                        <span class="price">127 €</span>
                                        <a href="" class="bouton">Reservez cette hôtel</a>
                                    </div>
                                </div>   
                            </div>
                        </div>
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
