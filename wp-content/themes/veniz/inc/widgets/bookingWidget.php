<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Booking widget
 *
 * @author ramino
 */
class bookingWidget extends WP_Widget {
    /**
    * Constructeur de la classe
    */
    function  __construct() {
            parent::__construct(
                    // ID du widget (on peut mettre "false")
                    'bookingWidget',
                    //  Nom du widget dans le backoffice
                    'Booking sidebar',
                    //  Description dans le backoffice
                    array( 'description' => 'Booking dans sidebar' )
            );
    }

    /**
    * Affichage du widget en Frontoffice
    *
    * @see WP_Widget::widget()
    *
    * @param array $args           Arguments du Widget
    * @param array $instance       Données sauvegardées en backoffice
    */
    public function widget( $args, $instance ) {

        // Extraction des paramètres du widget
        extract( $args );		
        ?>

		<div class="sidebar" style="margin-bottom: 20px;">
			<div class="activityList">        
				<div class="rowList clr">					
					<div class="booking-widget">
						<span class="booking-title">
							Hôtels à proximité
						</span>
					</div>
				</div>
			</div>
		</div>
           
        <?php
    }
    /**
    * Mise à jour des données sauvegardées en backoffice
    *
    * @see WP_Widget::update()
    *
    * @param array $new_instance       Données brutes du formulaire du backoffice
    * @param array $old_instance       Données précédentes
    *
    * @return array                    Données filtrées à sauvegarder
    */
    public function update( $new_instance, $old_instance ) {

            $instance = array();

            $instance['titre'] = strip_tags( $new_instance['titre'] );

            return $instance;
    }

    /**
    * Formulaire du backoffice
    *
    * @see WP_Widget::form()
    *
    * @param array $instance           Données enregistrées
    */
    public function form( $instance ) {
            if ( isset( $instance['titre'] ) ) {
                    $title = $instance['titre'];
            }
        ?>
            <div style="margin:10px 0;">
                    <label for="<?php echo $this->get_field_id( 'titre' ); ?>">Titre</label>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'titre' ); ?>" name="<?php echo $this->get_field_name( 'titre' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </div>
    <?php
    }
}

add_action( 'widgets_init', create_function( '', 'return register_widget( "ActiviteWidget" );' ) );
?>
