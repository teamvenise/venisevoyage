<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;
$pageid = get_the_id();
$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
$hotel = CHotel::getById($pageid);

$gallery = CHotel::getHotelGallery($pageid);
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

                <h4 class="subtitle yellow-text">Résumé des avis</h4>
                <div id="avis">
                    <table id="avis-table">
                        <tr class="fiveStars">
                            <td>5</td>
                            <td class="star"><i class="fa fa-star"></i></td>
                            <td>
                                <span class="barre-avis">
                                    <div class="size"></div>
                                </span>
                            </td>
                        </tr>
                        <tr class="fourStars">
                            <td>4</td>
                            <td class="star"><i class="fa fa-star"></i></td>
                            <td>
                                <span class="barre-avis">
                                    <div class="size"></div>
                                </span>
                            </td>
                        </tr>
                        <tr class="threeStars">
                            <td>3</td>
                            <td class="star"><i class="fa fa-star"></i></td>
                            <td>
                                <span class="barre-avis">
                                    <div class="size"></div>
                                </span>
                            </td>
                        </tr>
                        <tr class="twoStars">
                            <td>2</td>
                            <td class="star"><i class="fa fa-star"></i></td>
                            <td>
                                <span class="barre-avis">
                                    <div class="size"></div>
                                </span>
                            </td>
                        </tr>
                        <tr class="oneStar">
                            <td>1</td>
                            <td class="star"><i class="fa fa-star"></i></td>
                            <td>
                                <span class="barre-avis">
                                    <div class="size"></div>
                                </span>
                            </td>
                        </tr>
                    </table>

                    <div id="avis-note">
                        <span class="note">4.1</span>
                        <span class="rate">
                            <i class="fa fa-star check"></i>
                            <i class="fa fa-star check"></i>
                            <i class="fa fa-star check"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </div>
                </div>
            </div>

            <h4 class="subtitle yellow-text">Lorem ipsum dolor</h4>
            <p>
                In facilisis tincidunt semper.
                Integer eget eleifend ligula.
                Donec nec consectetur ligula.
                In hac habitasse platea dictumst.
                Nunc dapibus luctus venenatis.
                Curabitur dignissim eros id mauris sagittis, eu tincidunt enim vehicula.
                Sed felis tortor, bibendum vel elementum venenatis, feugiat at diam.</p>

            <p>
                Cras scelerisque leo sit amet dui viverra viverra.
                Interdum et malesuada fames ac ante ipsum primis in faucibus.
                Donec vitae dolor convallis, aliquam justo ut, rutrum augue.
                Vestibulum sagittis maximus felis egestas congue.
                Vivamus sit amet ante nec eros bibendum accumsan.
                Donec tristique orci in tellus tincidunt feugiat.
                Sed ultrices neque dolor, a pulvinar eros scelerisque a.
                Maecenas tempor nisl quis ligula iaculis mattis.
                Praesent aliquam diam in nisi posuere vestibulum.
                Pellentesque sagittis convallis maximus. Fusce ac justo nisi.
                Nam in risus sit amet est finibus lobortis ac in quam.
                Nulla pretium eros vel mauris mattis finibus.
                Maecenas et convallis eros. </p>
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
