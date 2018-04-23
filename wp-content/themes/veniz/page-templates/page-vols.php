<?php
/*
Template Name: vols-page
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
?>

	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
                <?php get_template_part('bloc', 'booking-vol'); ?>
                <h3 class="page-title title">Vols à Venise</h3>
                <p>
                    Vestibulum velit sem, tempor et congue non, vulputate ac risus. 
                    Donec semper blandit pretium. Sed et porta urna. 
                    Etiam imperdiet ligula fermentum, pellentesque odio vitae, volutpat lectus. 
                    Fusce tincidunt vehicula lorem, eget viverra augue semper non. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent odio lorem, sodales eu magna ut, ornare feugiat tellus.</p>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/encart.jpg" class="full-width-img" alt="" srcset="">

                <h4 class="subtitle yellow-text">LOREM IPSUM</h4>
                <p>
                    Aenean elementum diam nec lorem luctus venenatis ac quis lectus. 
                    In lorem purus, venenatis eget pellentesque sit amet, auctor non justo. 
                    Nam interdum libero tortor, quis feugiat tellus vulputate id. 
                    Integer at mi vel elit malesuada maximus a eget turpis. 
                    Nunc ac felis et risus porttitor placerat nec at erat.
                </p>

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
                    Quisque congue neque vitae vestibulum gravida.</p>
                
                <p>
                    Aenean elementum diam nec lorem luctus venenatis ac quis lectus. 
                    In lorem purus, venenatis eget pellentesque sit amet, auctor non justo. 
                    Nam interdum libero tortor, quis feugiat tellus vulputate id. 
                    Integer at mi vel elit malesuada maximus a eget turpis. 
                    Curabitur sodales nisi nisl, eget interdum turpis fermentum in.
                    Nam mollis nisl aliquet lectus efficitur sagittis. 
                </p>
                <p>
                    Aenean elementum diam nec lorem luctus venenatis ac quis lectus. 
                    In lorem purus, venenatis eget pellentesque sit amet, auctor non justo. 
                    Nam interdum libero tortor, quis feugiat tellus vulputate id. 
                    Integer at mi vel elit malesuada maximus a eget turpis. 
                    Nunc ac felis et risus porttitor placerat nec at erat. 
                    Sed mollis, tortor ac placerat vestibulum, sapien nisi pharetra quam, imperdiet cursus ipsum enim at mauris. 
                    Maecenas a justo quis lacus blandit pellentesque.
                </p>
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
