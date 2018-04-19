<?php /* Template Name: homepage */ ?>
<?php get_header('headerHome'); 
global $pageid;
$pageid = get_the_id();
$services = CCarte::getBy('service', 4, 'date', 'asc', null);
$activites = CCarte::getBy('activite', 8, 'date', 'asc', null);

$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
$paraph4 = CParagraphe::getBy($pageid, 4);

?>
<main id="main-home">
    <div class="grey_linear">
        <div class="fix_wrapper">
            <div id="blocBienvenue">
                <h2 class="firstTitle">
                    <?php
                    $titre_1 = $paraph1->title;
                    echo $titre_1;
                    ?>
                </h2>
                <p><?php
                    $content = $paraph1->content;
                    echo $content;
                    ?> </p>
            </div>

            <!-- Rassurants -->
            <div class="rassurants">
                <?php if (count($services) > 0) : ?>
                    <?php foreach ($services as $service): ?>
                        <div class="item">
                            <a href="<?php echo get_permalink($service->id); ?>">
                                <span class="icon">
                                    <img src="<?php echo CCarte::getCarteImage($service->thumbnail); ?>" />
                                </span>
                                <h3 class="title"><?php echo $service->title; ?></h3>
                                <span class="text">
                                    <p ><?php echo $service->content; ?></p>
                                </span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>               
            </div>
            <!-- Fin rassurants -->
        </div>
    </div>

    <!-- Articles -->
    <div class="with_polygonal">
        <div id="article_content">
            <div class="containerGrey">
                <div class="article1 artcl">
                    <div class="photo">
                        <?php
                       
                        $image = $paraph2->image;
                        $size = 'full'; //
                        ?>
                        <img src="<?php  if( $image ) echo $image ?>" alt="" srcset="">
                    </div>
                    <div class="text">
                        <h2 class="title"><?php
                            $titre_2 = $paraph2->title;
                            echo $titre_2;
                            ?></h2>
                        <p><?php
                            $content = $paraph2->content;
                            echo $content;
                            ?> </p>
                    </div>
                </div>
            </div>
            <svg viewBox="0 0 100 4" xmlns="http://www.w3.org/2000/svg">
                <polygon points="0 0, 100 0, 100 4" fill="#f5f5f5"/>
            </svg>
            <div class="article2 artcl">
                <div class="photo">
                    <?php
                    $image = get_field('image_3');
                    $size = 'full'; //
                    ?>
                    <img src="<?php  if( $image ) echo $image ?>" alt="" srcset="">
                </div>
                <div class="text">
                    <h2 class="title"><?php  $titre_3 = $paraph3->title; echo $titre_3; ?></h2>
                    <p><?php
                        $content = $paraph3->content;
                        echo $content;
                        ?> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin articles -->

    <!-- Activity -->
    <div class="containerGrey activitiesHome">
        <div class="fix_wrapper">
          <h2 class="title"><?php  $titre_4 = $paraph4->title;  echo $titre_4; ?></h2>
            <div class="activityList">
                <div class="rowList">
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
    </div>


</main>
<?php get_footer(); ?>