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
class TemoignageWidget    extends WP_Widget {
    /**
    * Constructeur de la classe
    */
    function  __construct() {

           parent::__construct(

                    // ID du widget (on peut mettre "false")
                    'ActiviteWidget',
                    'TemoignageWidget',
                    //  Nom du widget dans le backoffice

                    'Liste temoignage',
                    //  Description dans le backoffice
                   
                    array( 'description' => 'Liste Post temoignage' )
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

     $temoignages = CTemoignage::getBy(5, 'date', 'desc',null);  	   ?>
    <div class="sidebar" style="margin-bottom: 20px;">
        <div class="activityList">        
            <div class="rowList clr">
                <span class="sidebar-title">Nos activités</span>                
                <div class="sidebar-temoignage"> 
                    <span class="title">Ce qu'en pensent les voyageurs</span>
                    <?php if (count($activites) > 0) : ?>
                    <?php foreach ($temoignages as $temoignage): ?>
                        <div class="temoignage-item">
                            <p><?php echo $temoignage->content; ?></p>
                            <span class="author"><?php echo $temoignage->author; ?></span>
                        </div>
                    <?php  endforeach; ?>
                    <?php endif; ?>
                </div>
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

add_action( 'widgets_init', create_function( '', 'return register_widget( "TemoignageWidget" );' ) );
?>
