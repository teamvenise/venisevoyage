<?php
// "Hello World" shortcode
function shortcode_HelloWorld($content = null) {
    return '<p>Hi!!</p>';
}
add_shortcode('helloworld', 'shortcode_HelloWorld');

// Add Shortcode
function blod_text_shortcode( $atts , $content = null ) {

	return '<strong>' . $content . '</strong>';

}
add_shortcode( 'b', 'blod_text_shortcode' );

function img_shortcode( $atts , $content = null) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'width' => '',
			'height' => '',
		),
		$atts,
		'img'
	);

	// Return image HTML code
	return '<img src="' . $content . '" width="' . $atts['width'] . '" height="' . $atts['height'] . '">';

}
add_shortcode( 'img', 'img_shortcode' );

function h1_text_shortcode( $atts , $content = null ) {

	return '<h1 class="page-title title">' . $content . '</h1>';

}
add_shortcode( 'h1', 'h1_text_shortcode' );


function p_text_shortcode( $atts , $content = null ) {

	return '<p >' . $content . '</p>';

}
add_shortcode( 'p', 'p_text_shortcode' );

function transport_shortcode( $atts ,$content = null) {
    $atts = shortcode_atts(
		array(
			'img' => '',
			'title' => '',
                        'link' => ''
		),
		$atts,
		'transp'
	);

    $src =  get_template_directory_uri() . $atts['img'];
    $tranp_icone =  '<div class="item"><span class="icone"><img src='.$src .' alt="" srcset=""></span>';
    $tranp_title = '<span class="title dino">'.$atts['title'].'</span>';
    $tranp_content ='<p>' . $content . '</p>';
    $tranp_link ='<a class="round-btn" href="'.$atts['link'].'" target="_blank">En savoir plus <i class="fa fa-angle-right"></i></a></div>';

    return    $tranp_icone.$tranp_title.$tranp_content.$tranp_link;
}
 add_shortcode( 'transp', 'transport_shortcode' );

 function transport_transfert_shortcode( $atts ,$content = null) {
    $atts = shortcode_atts(
		array(
			'img_start_trajet' => '',
                        'img_arrow' => '',
                        'img_end_trajet' => '',
			'title' => '',
                        'link' => ''
		),
		$atts,
		'transp'
	);

    $img_start_trajet =  get_template_directory_uri() . $atts['img_start_trajet'];
    $img_arrow =  get_template_directory_uri() . $atts['img_arrow'];
    $img_end_trajet =  get_template_directory_uri() . $atts['img_end_trajet'];
  
    $tranp_icones = '<div class="icones">';
    $tranp_icones = $tranp_icones .'<span class="start brown-icon"><img src='.$img_start_trajet .' alt="" srcset=""></span>';
    $tranp_icones = $tranp_icones .'<span class="arrow"><img src='.$img_arrow .' alt="" srcset=""></span>';
    $tranp_icones = $tranp_icones .'<span class="end yellow-icon"><img src='.$img_end_trajet .' alt="" srcset=""></span>';
    $tranp_icones = $tranp_icones .'</div>';

    $transert_details = '<div class="transert-details">';
    $transert_details = $transert_details . '<h4 class="subtitle">'.$atts['title'].'</h4>';
    $transert_details = $transert_details . '<p>' . $content . '</p>';
    $transert_details = $transert_details .'</div>';

    $tranp_reserve = '<div class="transert-details">';
    $tranp_reserve = $tranp_reserve .'<a class="round-btn" href="'.$atts['link'].'" target="_blank">Reservez</a>';
    $tranp_reserve = $tranp_reserve .'</div>';
    
    return    '<div class="item">'.$tranp_icones.$transert_details.$tranp_reserve.'</div>';
}
 add_shortcode( 'transfert', 'transport_transfert_shortcode' );


?>
