<?php
/*
Template Name: hotel-detail-page
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class(); ?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?> page-intern">
            <div class="main-contents">
                <div class="booking-component">
                  <h4 class="booking-title title dino"><strong class="yellow-text">Pour</strong> venise</h4>
                  <?php get_sidebar('top');?>
                </div>
                <h3 class="page-title title">Hotel Ai Due Principi</h3>
                <div class="hotel-infos">                    
                    Sestiere Castello, 4971, 30122 Venezia VE, Italie</br>
                    +39 041 241 3979
                </div>
                <!-- GALERIE PHOTO -->
                <section class="hotel-slide">
                </section>
                <!-- FIN GALERIE PHOTO -->
                <div class="about-hotel">
                    <h4 class="subtitle yellow-text">Informations sur l'hôtel</h4>
                    <p>
                        Situé dans le quartier historique du Castello de Venise, cet hôtel haut de gamme à la façade palatiale donne sur un canal. 
                        Il se trouve à 3 minutes à pied de la gare maritime de Zaccaria, à 7 minutes de marche de la place Saint-Marc et à 14 minutes du Grand Canal.
                        Les chambres chics disposent du Wi-Fi (payant), d'une télévision à écran plat, d'un minibar et d'une salle de bain avec bain à remous. 
                        Les chambres de catégorie supérieure offrent une vue sur le canal. 
                        Les suites comprennent un balcon privatif. 
                        Un service de chambre est proposé.
                        Un petit-déjeuner buffet gratuit est proposé dans une salle à manger élégante. 
                        L'hôtel possède un bar raffiné, une salle de télévision et un centre d'affaires.</p>
                    <div id="option-container">
                        <span class="option">
                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/wifi.png" alt="" srcset=""></i>
                            <p>Wifi</p>
                        </span>

                        <span class="option">
                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/parking.png" alt="" srcset=""></i>
                            <p>Parking</p>
                        </span>

                        <span class="option unavailable">
                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/bar.png" alt="" srcset=""></i>
                            <p>Bar</p>
                        </span>

                        <span class="option unavailable">
                            <i><img src="<?php echo get_template_directory_uri()?>/assets/images/hebergement_icones/service_chambre.png" alt="" srcset=""></i>
                            <p>Service chambre</p>
                        </span>
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
		
		<div class="sidebar">
            <div class="activityList">
                <div class="rowList">
                    <h4 class="sidebar-title">Carte</h4>
                    <div class="map">
                        
                    </div>
                </div>
            </div>
            
            <div class="encart-sidebar">
                <div class="content">
                    <p>
                        Passer un week-end à
                        <span>Venise</span>
                    </p>
                    <button class="round-btn">Reservez des maintenant</button>
                </div>
            </div>
        </div>
	</div>
<?php
get_footer();
