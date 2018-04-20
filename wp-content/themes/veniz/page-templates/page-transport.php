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

$paraphFooter = CParagraphe::getFooterTitleBy($pageid);

$tranferts = CTransfert::getBy(3, 'date', 'asc', null);

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
                <div class="headTitle"><?php  echo $paraphFooter->title_footer;   ?></div>

                  <?php if (count($tranferts) > 0) : ?>
                        <?php foreach ($tranferts as $tranfert): ?>
                <div class="item">
                    <div class="icones">
                        <?php $type = $tranfert-> type[value];  if( $type == 0 ) : ?>
                                  <span class="start brown-icon">
                                     <?php $image = $tranfert->icone_start;  if( $image ) : ?>
                                           <img src="<?php  echo $image ?>" alt="" srcset="">
                                      <?php endif; ?>
                                </span>
                              <?php else :?>
                                  <span class="end yellow-icon">
                                     <?php $image = $tranfert->icone_start;  if( $image ) : ?>
                                           <img src="<?php  echo $image ?>" alt="" srcset="">
                                      <?php endif; ?>
                                   </span>
                             <?php endif; ?>
                       
                        <span class="arrow">
                            <?php $type = $tranfert-> type[value];  if( $type == 0 ) : ?>
                                  <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                              <?php else :?>
                                  <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                                  <img src="<?php echo get_template_directory_uri()?>/assets/images/left_arrow.png" alt="" srcset="">
                             <?php endif; ?>
                           
                        </span>
                        <span class="end yellow-icon">
                           <?php $image = $tranfert->icone_end;  if( $image ) : ?>
                                   <img src="<?php  echo $image ?>" alt="" srcset="">
                           <?php endif; ?>
                        </span>
                    </div>

                    <div class="transert-details">
                        <h3 class="subtitle"><?php  echo $tranfert->title ?></h3>
                        <p><?php  echo $tranfert->content ?></p>
                    </div>
                   <div class="reserve">
                         <a class="round-btn" href="<?php echo $transport->lien_reserver; ?>">Reservez<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                    <?php endforeach; ?>
                 <?php endif;?>
               
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
