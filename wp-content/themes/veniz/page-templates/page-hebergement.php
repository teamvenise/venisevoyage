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
?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">

                <?php get_template_part('bloc', 'booking-hebergement'); ?>
                
                <h2 class="page-title title">
                    <?php  echo  $paraph1->title; ?>
                </h2>
                 <p><?php  echo $paraph1->content; ?> </p>
                  <?php $image = $paraph1->image; $size = 'full'; if( $image ) : ?>
                        <div class="photo"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                  <?php endif; ?>
                        
                <h3 class="subtitle yellow-text"><?php  echo  $paraph2->title; ?></h3>
                <p><?php  echo $paraph2->content; ?> </p>

                 <?php $image = $paraph2->image; $size = 'full'; if( $image ) : ?>
                        <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                 <?php endif; ?>

                <h3 class="subtitle yellow-text"><?php  echo  $paraph3->title; ?></h3>
                <p><?php  echo $paraph3->content; ?> </p>
                 <?php $image = $paraph3->image; $size = 'full'; if( $image ) : ?>
                        <div class="full-width-img"><img src="<?php  echo $image ?>" alt="" srcset=""> </div>
                 <?php endif; ?>

                <h2 class="subtitle yellow-text"><?php  echo $paraphFooter->title_footer;   ?></h2>
                <div id="hotels-list">
                    <div class="onRow">
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
                    </div>

                    <div class="onRow">
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
                        <a class="item" href="">
                            <span class="hotel-photo">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/hotel_picture.jpg" alt="" srcset="">
                            </span>
                            <span class="hotel_name">Hotel Ai Due Principi</span>
                            <div class="evaluation">
                                <span class="stars">★★★☆☆</span>
                            </div>
                            <p>Donec velit magna, vulputate nec placerat quis, placerat vitae massa.</p>
                            <button class="round-btn">Voir</button>
                        </a>
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
