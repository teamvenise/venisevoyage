<?php
/*
Template Name: Contact page
Template Post Type: post, page
*/
get_header(); ?>
<?php $layout_class = shapely_get_layout_class(); ?>

<div class="row">
    <div id="primary" class="col-md-12 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>">
        <div class="fix_wrapper centered">
            Vous souhaitez formuler des remarques ou des suggestions sur notre site ?

            <div class="contact-field">
                <h3 class="title dino">Veuillez utiliser ce formulaire</h3>
                <?php while(have_posts()) : the_post(); ?>
                    <?php the_content();?>
                </form>
                <div class="clearfix"></div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div><!-- #primary -->
</div>
<?php
get_footer();