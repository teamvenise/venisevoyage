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
                    <form>
                        <div class="onRow">
                            <input type="text" placeholder="Nom"/>
                            <input type="text" placeholder="Prénom"/>
                            <input type="email" placeholder="E-mail"/>
                        </div>
                        <textarea name="" id="" placeholder="Message"></textarea>
                        <button type="submit" class="round-btn">Envoyer</button>
                    </form>
                </div>
            </div>
		</div><!-- #primary -->
	</div>
<?php
get_footer();