<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paragraphe
 *
 * @author ramino
 */
 class CParagraphe {

     public function __construct() {}

     public static function getBy($pageid, $indice = 1) {

	$return  = new stdClass();
	$return->title = get_field( 'titre_' . $indice, $pageid );
	$return->content = get_field( 'contenu_' . $indice , $pageid );
	$return->image = get_field( 'image_' . $indice, $pageid );

        return $return;
     }
}

?>
