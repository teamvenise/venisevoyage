<?php

add_shortcode( 'transport', 'carte_shortcode' );
function carte_shortcode() {
    $pageid = get_the_id();
    $transports = CCarte::getBy('transport', 6, 'date', 'desc', null);
    ob_start();
    ?>
<div class="transport-vue">
    <div class="onRow">
            <?php if (count($transports) > 0) : ?>
                <?php foreach ($transports as $transport): ?>
        <div class="item">
            <span class="icone">
                <img src="<?php echo CCarte::getCarteImage($transport->thumbnail); ?>" />
            </span>
            <span class="title dino">
                            <?php echo $transport->title; ?>
            </span>
            <p ><?php echo $transport->content; ?></p>
            <a class="round-btn" href="<?php echo get_permalink($transport->id); ?>">En savoir plus <i class="fa fa-angle-right"></i></a>
        </div>
                <?php endforeach; ?>
            <?php endif;?>
    </div>
</div>
    <?php
    $output_string = ob_get_contents();
    ob_end_clean();
    return $output_string;
    wp_reset_postdata();
}

add_shortcode( 'transfert', 'transfert_shortcode' );
function transfert_shortcode( ) {
    $pageid = get_the_id();
    $paraphFooter = CParagraphe::getFooterBy($pageid);
    $tranferts = CTransfert::getBy(3, 'date', 'asc', null);
    // var_dump($tranferts);die;
    ob_start();
    ?>
    <div class="transfert-component">
        <div class="headTitle"><?php  echo $paraphFooter->title_footer;   ?></div>
            <?php if (count($tranferts) > 0) : ?>
                <?php foreach ($tranferts as $tranfert): ?>
                <div class="item">
                    <div class="icones">
                                    <?php $type = $tranfert-> type[value];  if( $type == 0 ) : ?>
                        <span class="start brown-icon">
                                            <?php $image = $tranfert->icone_start;  if( $image ) : ?>
                            <img src="<?php  echo $image ?>" alt="" srcset="">
                                            <?php endif; ?>
                        </span>
                                    <?php else :?>
                        <span class="end yellow-icon">
                                            <?php $image = $tranfert->icone_start;  if( $image ) : ?>
                            <img src="<?php  echo $image ?>" alt="" srcset="">
                                            <?php endif; ?>
                        </span>
                                    <?php endif; ?>

                        <span class="arrow">
                                        <?php $type = $tranfert-> type[value];  if( $type == 0 ) : ?>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                                        <?php else :?>
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/right_arrow.png" alt="" srcset="">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/left_arrow.png" alt="" srcset="">
                                        <?php endif; ?>

                        </span>
                        <span class="end yellow-icon">
                                        <?php $image = $tranfert->icone_end;  if( $image ) : ?>
                            <img src="<?php  echo $image ?>" alt="" srcset="">
                                        <?php endif; ?>
                        </span>
                    </div>

                    <div class="transert-details">
                        <h3 class="subtitle"><?php  echo $tranfert->title ?></h3>
                        <p><?php  echo $tranfert->content ?></p>
                    </div>
                    <div class="reserve">
                        <a class="round-btn" href="<?php echo $transport->lien_reserver; ?>">Reservez<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif;?>
    </div>

    <?php
    $output_string = ob_get_contents();
    ob_end_clean();
    return $output_string;
    wp_reset_postdata();
}

add_shortcode( 'reserver', 'reserver_shortcode' );
function reserver_shortcode() {   
    ob_start();
    ?>
        <div class="encart">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/encart.jpg" class="full-width-img" alt="" srcset="">
            <button class="round-btn btn-second">RESERVEZ DÈS MAINTENANT</button>
        </div>
    <?php
    $output_string = ob_get_contents();
    ob_end_clean();
    return $output_string;
    wp_reset_postdata();
}



?>
