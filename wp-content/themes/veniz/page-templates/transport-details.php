<?php
/*
Template Name: transport-details
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class(); ?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
            <div class="main-contents">
                <h3 class="page-title title">Gondole</h3>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/picture_full.jpg" class="full-width-img" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    In consequat lacus turpis, sed dapibus nulla aliquam at. 
                    Sed at fermentum ex. In ac nisl sem. 
                    Cras magna risus, fringilla nec scelerisque nec, aliquam maximus nisi. 
                    <a href="javascript:void(0)" class="a-link"> Vestibulum ut pellentesque nunc</a>. 
                    Aliquam tincidunt, quam a luctus congue, mauris felis blandit eros, vitae rutrum lectus ligula ut elit. 
                    Vivamus auctor et urna eget ullamcorper. 
                    Vestibulum velit sem, tempor et congue non, vulputate ac risus. 
                    Donec semper blandit pretium. Sed et porta urna.</p>
                <div class="encart">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/encart.jpg" class="full-width-img" alt="" srcset="">
                    <button class="round-btn btn-second">RESERVEZ DÈS MAINTENANT</button>
                </div>
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
