<?php 
class CHotel {

    private static $_elements;

    public function __construct() {

    }

    /**
     * fonction qui prend les informations son Id.
     *
     * @param type $pid
     */
    public static function getById($pid) {
        $pid = intval($pid);

        //On essaye de charger l'element
        if(!isset(self::$_elements[$pid])) {
            self::_load($pid);
        }
        //Si on a pas réussi à chargé l'article (pas publiée?)
        if(!isset(self::$_elements[$pid])) {
            return FALSE;
        }

        return self::$_elements[$pid];
    }

    /**
     * fonction qui charge toutes les informations dans le variable statique $_elements.
     *
     * @param type $pid
     */
    private static function _load($pid) {
        $pid = intval($pid);
        $p = get_post($pid);

        if($p->post_type == "auberge") {
            $element = new stdClass();

            //traitement des donn�es
            $element->id = $pid;
            $element->title = $p->post_title;
            $element->content = $p->post_content;
            $element->thumbnail = get_post_thumbnail_id($pid);

            $element->hotel_infos = get_field('hotel_info', $pid);
            $element->adresse = get_field('adresse', $pid);
            $element->about_hotel = get_field('about_hotel', $pid);
            $element->option_hotel = get_field_object('options_hotel', $pid);

            $element->gallery_images  = acf_photo_gallery('gallery_images',$pid);
            $element->avis = get_field('avis', $pid);
             $element->extrait = $p->post_content; //get_field('extrait', $pid);

            //stocker dans le tableau statique
            self::$_elements[$pid] = $element;
        }
    }

    /**
     * fonction qui retourne une liste filtrée
     *
     */
    public static function getBy( $numberposts = -1, $orderby = 'date', $order = 'DESC', $meta_key = null) {
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'auberge',
            'post_status' => 'publish',
            'paged'=> $paged,
            'posts_per_page' => $numberposts,
            'order' => $order,
            'orderby' => $orderby,
            'fields' => 'ids'
        );

        if (!is_null($meta_key)) {
            $args['meta_key'] = $meta_key;
        }



        // // tableau id genre
        // if (!is_null($name)) {
        //     $args['tax_query'][] = array(
        //         'taxonomy' => 'genre',
        //         'field' => 'slug',
        //         'terms' => $genre
        //     );
        // }

        $elements = new WP_Query ( $args );

        $GLOBALS['wp_query'] = $elements;

        $elts = array ();
        if ( $elements->have_posts () ) {

            $elements = $elements->posts;

            foreach ( $elements as $id ) {
                $elt = self::getById ( intval ( $id ) );
                $elts [] = $elt;
            }
        }
        wp_reset_postdata ();

        return $elts;
    }

    public static function getHotelImage($id, $size = null) {
        return wp_get_attachment_image_url($id, $size);
    }

    public static function getHotelOption($key, $options) {
        $isOption = in_array($key, $options);
        switch ($isOption) {
            case 1:
                return "";
                break;

            default: return " unavailable";
                break;
        }
    }

     public static function getHotelOptionUrl($key) {
       
        switch ($key) {
            case 0:
                return "wifi.png";
                break;
            case 1:
                return "parking.png";
                break;
            case 2:
                return "bar.png";
                break;
            case 3:
                return "service_chambre.png";
                break;

            default: return " ";
                break;
        }
    }

     public static function getHotelOptionChoices($key,$options) {

        switch ($key) {
            case 0:
                return $options[choices][0];
                break;
            case 1:
                return "parking.png";
                break;
            case 2:
                return "bar.png";
                break;
            case 3:
                return "service_chambre.png";
                break;

            default: return " ";
                break;
        }
    }

    

    public static function getHotelGallery($id, $size = null) {
    //Get the images ids from the post_metadata
        $images = acf_photo_gallery('gallery_images', $id);

        //Check if return array has anything in it
        if( count($images) ) {

        //Cool, we got some data so now let's loop over it
            foreach($images as $image) {
                $id = $image['id']; // The attachment id of the media
                $title = $image['title']; //The title
                $caption= $image['caption']; //The caption
                $full_image_url= $image['full_image_url']; //Full size image url
                $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                $url= $image['url']; //Goto any link when clicked
                $target= $image['target']; //Open normal or new tab
                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
            }
        }

        return $images;
    }
}  
?>