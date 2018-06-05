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
	<div class="row" id="hebergement">
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

                <div class="encart-page">
                    <a href="https://www.booking.com" class="round-btn">Reservez des maintenant</a>
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

                <h3 class="subtitle"><?php  echo $paraphFooter->title_footer;?></h3>

               
                <div id="hotels-list">
                    <div class="onRow">
                        <?php if (count($hotels) > 0) : ?>
                            <?php foreach ($hotels as $hotel):?>
                            <div class="item">
                                <span class="hotel-photo">
                                    <?php if($hotel->thumbnail):?>
                                        <img src="<?php echo CHotel::getHotelImage($hotel->thumbnail);?>">
                                    <?php endif ;?>
                                </span>
                                <div class="content-container">
                                    <div class="hotel-all-detail clearfix">
                                        <div class="left">
                                            <span class="hotel_name">
                                                <a href="<?php echo get_permalink($hotel->id); ?>"><?php echo $hotel->title; ?></a>
                                            </span>
                                            <div class="evaluation">
                                                <span class="stars">
                                                    <?php if (($hotel->avis) > 0):?>											
                                                        <?php for( $i= 1 ; $i <= $hotel->avis; $i++ ):?>
                                                            <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset="">
                                                        <?php endfor; ?>
                                                    <?php endif; ?>											
                                                </span>
                                            </div>
                                            <div class="option clearfix">
                                                <?php
                                                    $hotel_options = $hotel->option_hotel;
                                                    $options = $hotel->option_hotel[value];
                                                    if (count($options) > 0) : ?>
                                                    <?php foreach($options as $option): ?>
                                                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/<?php echo CHotel::getHotelOptionUrl($option)?>" alt="" srcset=""></i>                                                          
                                                    <?php endforeach; ?>
                                                <?php endif;?>
                                            </div>
                                            <div class="hotel-adresse"><?php echo $hotel->adresse?></div>
                                            <div class="contenus">
                                                <p><?php echo substr($hotel->extrait, 0, 200); ?>...</p>
                                                <a class="btn" href="<?php echo get_permalink($hotel->id); ?>">Plus de details <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="right price-section">
                                            À partir de
                                            <span class="price"><?php echo $hotel->prix; ?> €</span>
                                            <a href="https://www.booking.com" target="_blank" class="bouton">Reservez cette hôtel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
		</div>
		
        <?php
        if ( $layout_class == 'sidebar-right' )
                get_sidebar();
       ?>
	</div>
<?php
get_footer();
