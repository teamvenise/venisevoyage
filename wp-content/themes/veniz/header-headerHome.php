<?php
/**
 * The second header for our theme.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="nav-container home-header">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container nav-bar">
					<div class="row">
						<div class="module left site-title-container">
							<?php shapely_get_header_logo(); ?>
						</div>
						<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="fa fa-bars"></i>
						</div>
						<div class="module-group right">
							<div class="module left">
								<?php shapely_header_menu(); // main navigation ?>
							</div>
							<!--end of menu module-->
						</div>
						<!--end of module group-->
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
                <?php
                    $header = get_the_post_thumbnail_url($post->ID);
                  
		?>
		<div id="slider" <?php echo $header ? 'style="background: #824c4c url('.$header.') no-repeat top center;"' : 'class="home-bg"' ?>>
			<div id="slider-text">
                            <h1 class="title">  <?php echo single_post_title( '', false );  ?></h1>
				<p>
				<?php
                                  while ( have_posts() ) : the_post();
                                   the_content();
                                  endwhile;?></p>
			</div>
			<span class="btn-scroll"></span>
		</div>
			
	</header><!-- #masthead -->

	<div id="content" class="main-container">