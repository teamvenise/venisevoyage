<?php
/*
Template Name: transport-page
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
$pageid = get_the_id();
$transports = CCarte::getBy('transport', 6, 'date', 'desc', null);

$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
?>
	<div class="row">
            <div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
                <h2 class="page-title title">
                    <?php
                    $titre_1 = get_field( 'titre_1', $pageid );
                    echo  $paraph1->title;
                    ?>
                </h2>
                <p><?php
                    $content = get_field( 'contenu_1', $pageid );
                    echo $paraph1->content;
                    ?> </p>

                <div class="transport-vue">
                    <div class="onRow">
                        <?php if (count($transports) > 0) : ?>
                        <?php foreach ($transports as $transport): ?>
                            <div class="item">
                                <span class="icone">
                                     <img src="<?php echo CCarte::getCarteImage($transport->thumbnail); ?>" />
                                </span>
                                <span class="title dino">
                                      <?php echo $transport->title; ?>
                                </span>
                                <p ><?php echo $transport->content; ?></p>
                                <a class="round-btn" href="<?php echo get_permalink($transport->id); ?>">En savoir plus <i class="fa fa-angle-right"></i></a>
                            </div>
                            <?php endforeach; ?>
                        <?php endif;?>                     
                    </div>

               
                </div>

                <h2 class="subtitle">
                    <?php  echo  $paraph2->title; ?>
                </h2>
                <p><?php  echo $paraph2->content; ?> </p>

                <h2 class="subtitle"> <?php  echo  $paraph3->title; ?></h2>
                <p><?php  echo $paraph3->content; ?> </p>
            </div>
                
            <div class="transfert-component">
                <div class="headTitle">Transfert</div>
                <div class="item">
                    <div class="icones">
                        <span class="start brown-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_planemarron.png" alt="" srcset="">
                        </span>
                        <span class="arrow">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                        </span>
                        <span class="end yellow-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_litblanc.png" alt="" srcset="">
                        </span>
                    </div>

                    <div class="transert-details">
                        <h4 class="subtitle">Aéroport - Hôtel</h4>
                        <p>
                            Nulla scelerisque auctor justo, at porta erat viverra ut. 
                            Nam quis lorem id enim commodo sollicitudin a nec lectus. 
                        </p>
                    </div>
                    <div class="reserve">
                        <button class="round-btn">Reservez</button>
                    </div>
                </div>

                <div class="item">
                    <div class="icones">
                        <span class="start brown-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_litmarron.png" alt="" srcset="">
                        </span>
                        <span class="arrow">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                        </span>
                        <span class="end yellow-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_planeblanc.png" alt="" srcset="">
                            </span>
                        </span>
                    </div>

                    <div class="transert-details">
                        <h4 class="subtitle">Hôtel - Aéroport</h4>
                        <p>
                            Nulla scelerisque auctor justo, at porta erat viverra ut. 
                            Nam quis lorem id enim commodo sollicitudin a nec lectus. 
                        </p>
                    </div>
                    <div class="reserve">
                        <button class="round-btn">Reservez</button>
                    </div>
                </div>

                <div class="item">
                    <div class="icones">
                        <span class="start yellow-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_planeblanc.png" alt="" srcset="">
                        </span>
                        <span class="arrow">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/left_arrow.png" alt="" srcset="">
                        </span>
                        <span class="end yellow-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/transport_icones/trajet_litblanc.png" alt="" srcset="">
                        </span>
                    </div>

                    <div class="transert-details">
                        <h4 class="subtitle">Aéroport - Hôtel</h4>
                        <p>
                            Nulla scelerisque auctor justo, at porta erat viverra ut. 
                            Nam quis lorem id enim commodo sollicitudin a nec lectus. 
                        </p>
                    </div>
                    <div class="reserve">
                        <button class="round-btn">Reservez</button>
                    </div>
                </div>
            </div>
		</div>
		
		<div class="sidebar">
            <div class="activityList">
                <div class="rowList">
                    <h4 class="sidebar-title">Bon plan de la semaine</h4>
                    <div class="item">
                        <span class="photo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/activity_photo.jpg" alt="" srcset="">
                        </span>
                        <span class="title">
                            Excursion en bateau
                        </span>
                    </div>

                    <div class="item">
                        <span class="photo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/activity_photo.jpg" alt="" srcset="">
                        </span>
                        <span class="title">
                            Excursion en bateau
                        </span>
                    </div>

                    <div class="item">
                        <span class="photo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/activity_photo.jpg" alt="" srcset="">
                        </span>
                        <span class="title">
                            Excursion en bateau
                        </span>
                    </div>

                    <div class="item">
                        <span class="photo">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/activity_photo.jpg" alt="" srcset="">
                        </span>
                        <span class="title">
                            Excursion en bateau
                        </span>
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
