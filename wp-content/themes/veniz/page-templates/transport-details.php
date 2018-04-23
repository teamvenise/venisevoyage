<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
global $post;

$carte = CCarte::getById($post->ID);
//var_dump( CCarte::getById($post->ID));die;
?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
                <h2 class="page-title title"><?php  echo $carte->title; ?> </h2>
                <?php $image = $carte->thumbnail;  if( $image ) : ?>
                        <img src="<?php  echo $image ?>" alt="" srcset=" " class="full-width-img">
                  <?php endif; ?>               
                <p><?php echo $carte->content; ?></p>
                
                <p>
                    Nam mollis nisl aliquet lectus efficitur sagittis. 
                    Quisque congue neque vitae vestibulum gravida. 
                    Fusce et odio tellus. Quisque vitae tortor fringilla ante accumsan sagittis in ac est. 
                    Vestibulum molestie tellus turpis, vitae luctus est posuere a. 
                    Aenean vitae semper tortor, id consequat odio. 
                    Pellentesque id diam lacinia orci mattis pharetra. 
                    Quisque dapibus libero in diam tempus, non gravida ante euismod.</p>
                
                <p>
                    Aenean elementum diam nec lorem luctus venenatis ac quis lectus. 
                    In lorem purus, venenatis eget pellentesque sit amet, auctor non justo. 
                    Nam interdum libero tortor, quis feugiat tellus vulputate id. 
                    Integer at mi vel elit malesuada maximus a eget turpis. 
                    Nunc ac felis et risus porttitor placerat nec at erat. 
                    Sed mollis, tortor ac placerat vestibulum, sapien nisi pharetra quam, imperdiet cursus ipsum enim at mauris. 
                    Maecenas a justo quis lacus blandit pellentesque. Curabitur sodales nisi nisl, eget interdum turpis fermentum in.
                </p>

                <h4 class="subtitle yellow-text">Lorem ipsum dolor sit amet</h4>
                <p>
                    Aenean elementum diam nec lorem luctus venenatis ac quis lectus. 
                    In lorem purus, venenatis eget pellentesque sit amet, auctor non justo. 
                    Nam interdum libero tortor, quis feugiat tellus vulputate id. 
                    Integer at mi vel elit malesuada maximus a eget turpis. 
                    Nunc ac felis et risus porttitor placerat nec at erat. 
                    Sed mollis, tortor ac placerat vestibulum, sapien nisi pharetra quam, imperdiet cursus ipsum enim at mauris. 
                    Maecenas a justo quis lacus blandit pellentesque. 
                    Curabitur sodales nisi nisl, eget interdum turpis fermentum in.
                    Nam mollis nisl aliquet lectus efficitur sagittis. 
                </p>
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
