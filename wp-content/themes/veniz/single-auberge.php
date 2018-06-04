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

?>
<script>
    var address = '<?php echo $hotel->adresse?>';
</script>
<div class="row">
    <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?> page-intern">
        <div class="main-contents">           
            <div class="hotel-infos">
<<<<<<< HEAD
<<<<<<< Updated upstream
                <?php  echo  $hotel->adresse; ?><br>

                <?php  echo  $hotel->hotel_infos; ?>
=======
=======
>>>>>>> a5d9c5579af55d342e2ff527edf22ec41c23fbf0
                <span class="hotel-name">L'Albergo Quattro Fontane</span>
                <span class="stars">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset=""> 
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset="">                                 
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/full_star.png" alt="" srcset="">                                 
                </span>
                <div class="addresse-hotel"><?php echo  $hotel->adresse; ?></div>
<<<<<<< HEAD
               
>>>>>>> Stashed changes
=======
                <?php //echo  $hotel->hotel_infos; ?>
>>>>>>> a5d9c5579af55d342e2ff527edf22ec41c23fbf0
            </div>
            <div id="hotel-review">
                <!-- GALERIE PHOTO -->
                <div class="hotel-slide">                  
                    <?php  if( count($gallery) ):?>
                        <div id="slider-gallery" class="flexslider">
                            <ul class="slides">
                            <?php  foreach($gallery as $image): ?>
                                    <li>
                                        <?php   $full_image_url= $image['full_image_url']; $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                                        $title = $image['title'];   ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                        </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="carousel-gallery" class="flexslider">
                            <ul class="slides">
                            <?php  foreach($gallery as $image): ?>
                                    <li>
                                        <?php   $full_image_url= $image['full_image_url']; $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160);
                                        $title = $image['title'];   ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                        </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>

<<<<<<< HEAD
<<<<<<< Updated upstream
                <?php endif; ?>
            </section>
            <!-- FIN GALERIE PHOTO -->
=======
                    <?php endif; ?>
                </div>
                <div class="right">
                    <?php echo  $hotel->hotel_infos; ?>
                    <span>Ses points forts</span>
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
                   
=======
                    <?php endif; ?>
                </div>
                <div class="right">
                    <p>À seulement 300 mètres de la place Saint-Marc, l'hôtel de caractère Due Principi est situé dans un palais historique restauré. Il propose des chambres élégantes avec une décoration moderne ou classique et une télévision par satellite à écran LCD.</p>
                    <span>Ses points forts</span>
                    <div class="option clearfix">
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/wifi.png" alt="" srcset=""></i>
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/parking.png" alt="" srcset=""></i>
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/bar.png" alt="" srcset=""></i>
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/service_chambre.png" alt="" srcset=""></i>
                        <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/heater.svg" alt="" srcset=""></i>
                    </div>
>>>>>>> a5d9c5579af55d342e2ff527edf22ec41c23fbf0
                    <span>Les clients aiment...</span>
                    <ul class="temoignages">
                        <li><i class="fa fa-check-circle"></i>« très bonne situation géographique »</li>
                        <li><i class="fa fa-check-circle"></i>« très propre et ordonné »</li>
                        <li><i class="fa fa-check-circle"></i>« personnel exceptionnel »</li>
                        <li><i class="fa fa-check-circle"></i>« l'esprit boutique hôtel »</li>
                    </ul>
                    <span class="separator"></span>
                    <a class="btn round-btn">Reservez</a>
                </div>
                <!-- FIN GALERIE PHOTO -->
            </div>
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> a5d9c5579af55d342e2ff527edf22ec41c23fbf0
            <div class="about-hotel">               
                <p><?php  echo  $hotel->about_hotel; ?></p>                
            </div>
            <h2><?php  echo $paraphFooter->title_footer;?></h2>           
            <p><?php  echo $paraphFooter->content_footer; ?></p>
            <div class="similar-hotels">
            <h2 class="title">Hotels similaires</h2>
                <div class="hotel-list">
                    <div class="rowList">
                        <div class="item">
                            <span class="photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/activity_photo.jpg" />
                            </span>
                            <span class="title">
                                <a href="">Art à Venise</a>
                            </span>
                        </div>
                        <div class="item">
                            <span class="photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/activity_photo.jpg" />
                            </span>
                            <span class="title">
                                <a href="">Déguisez-vous pour le carnaval de Venise</a>
                            </span>
                        </div>
                        <div class="item">
                            <span class="photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/activity_photo.jpg" />
                            </span>
                            <span class="title">
                                <a href="">Faites la tournée des bacari avec les Vénitiens</a>
                            </span>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>
    <?php   
        get_sidebar( );
    ?>
</div>
<?php
get_footer(); ?>
<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 20,
      scrollwheel: false,
      zoomControl: false,
      center: {lat: -34.397, lng: 150.644},
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: false
    });
    var geocoder = new google.maps.Geocoder();
      geocodeAddress(geocoder, map);
  }

  function geocodeAddress(geocoder, resultsMap) {
    var address = '<?php echo $hotel->adresse?>';
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIZ60y28YQxA8tUkzhQV_Rz8cO-FDaebc&callback=initMap">
</script>


