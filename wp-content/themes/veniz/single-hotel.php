<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;
$pageid = get_the_id();

$hotel = CHotel::getById($pageid);
$gallery = CHotel::getHotelGallery($pageid);
$paraphFooter = CParagraphe::getFooterBy($pageid);
//var_dump($gallery); die;
?>
<div class="row">
    <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
        <div class="main-contents">
            <p><?php  echo  $hotel->content; ?>
            </p>
            <div class="hotel-infos">
                <?php  echo  $hotel->hotel_infos; ?>
            </div>
            <?php $image = $hotel->thumbnail; if( $image ) : ?>
            <div class="photo">  <img src="<?php echo CHotel::getHotelImage($hotel->thumbnail); ?>" /> </div>
            <?php endif; ?>
            <!-- GALERIE PHOTO -->
            <section class="hotel-slide">
                <?php  if( count($gallery) ):?>

                    <?php  foreach($gallery as $image): ?>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                                <?php  
                                $url= $image['url'];
                                $full_image_url= $image['full_image_url'];
                                $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                                $title = $image['title'];
                                 $target= $image['target'];
                                 //var_dump($image['full_image_url']); die;
                                if( !empty($url) ) { ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                <?php if( !empty($url) ) { ?></a><?php } ?>
                    </div>
                </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>
            <!-- FIN GALERIE PHOTO -->
            <div class="about-hotel">
                <h2 class="subtitle yellow-text">Informations sur l'hôtel</h2>
                <p><?php  echo  $hotel->about_hotel; ?>
                </p>
                <div id="option-container">
                    <?php $options = $hotel->option_hotel[value];if (count($options) > 0) : ?>

                    <span class= "option " <?php  echo  CHotel::getHotelOption('0',$options)  ?> >
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/wifi.png" alt="" srcset=""></i>
                        <p>Wifi</p>
                    </span>

                    <span class= "option <?php  echo  CHotel::getHotelOption('1',$options) ?> "  >
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/parking.png" alt="" srcset=""></i>
                        <p>Parking</p>
                    </span>

                    <span class= "option <?php  echo  CHotel::getHotelOption('2',$options) ?> "  >
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/bar.png" alt="" srcset=""></i>
                        <p>Bar</p>
                    </span>

                    <span class= "option <?php  echo  CHotel::getHotelOption('3',$options) ?> "  >
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/service_chambre.png" alt="" srcset=""></i>
                        <p>Service de chambre</p>
                    </span>


                    <?php endif;?>

                </div>
            </div>
            <h3 class="subtitle yellow-text"><?php  echo $paraphFooter->title_footer;   ?></h3>           
            <p><?php  echo $paraphFooter->content_footer; ?> </p>
        </div>
    </div>
    <?php   
        get_sidebar( );
    ?>
</div>
<?php
get_footer();
