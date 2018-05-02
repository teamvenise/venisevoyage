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
    <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
        <div class="main-contents">
            <p>
                <?php  echo apply_filters('the_content', $hotel->content ); ?>
            </p>
            <div class="hotel-infos">
                <?php  echo  $hotel->adresse; ?><br>

                <?php  echo  $hotel->hotel_infos; ?>
            </div>

            <!-- GALERIE PHOTO -->
            <section class="hotel-slide">                  
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


