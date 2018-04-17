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

		<div id="slider">
			<div id="slider-text">
				<h3 class="title">Venise</h3>
				<p>
				Proin sed egestas ante. Curabitur tincidunt enim sed interdum tincidunt. 
				Vivamus quis pellentesque lorem. Vestibulum eu pretium lectus. 
				Suspendisse potenti. Fusce ex sem, mattis id egestas malesuada.</p>
			</div>
			<span class="btn-scroll"></span>
		</div>
			
	</header><!-- #masthead -->

	<div id="content" class="main-container">