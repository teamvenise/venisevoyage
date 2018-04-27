<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Activite
 *
 * @author ramino
 */
class ActiviteWidget  extends WP_Widget {
    /**
    * Constructeur de la classe
    */
    function  __construct() {

            parent::__construct(

                    // ID du widget (on peut mettre "false")
                    'ActiviteWidget',
                    //  Nom du widget dans le backoffice
                    'Liste Activite',
                    //  Description dans le backoffice
                    array( 'description' => 'Liste Post Activite' )
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

        // Récupération des paramètres
        $titre = $instance['titre'];

        $activites = CCarte::getBy('activite', 8, 'date', 'asc', null);
        ?>

<div class="sidebar" style="margin-bottom: 20px;">
            <div class="activityList">
                <div class="rowList">
                    <h2 class="sidebar-title"><?php  echo $titre; ?></h2>
                        <?php if (count($activites) > 0) : ?>
                            <?php foreach ($activites as $activite): ?>
                            <div class="item">
                                <span class="photo">
                                     <img src="<?php echo CCarte::getCarteImage($activite->thumbnail); ?>" />
                                </span>
                                <span class="title">
                                     <a href="<?php echo get_permalink($activite->id); ?>"> <?php echo $activite->title; ?></a>
                                </span>
                            </div>
                            <?php endforeach; ?>
                        <?php endif;?>
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
