<?php
/*
Template Name: transport-page
Template Post Type: page
*/

get_header();
$layout_class = shapely_get_layout_class();
$pageid = get_the_id();
$paraph1 = CParagraphe::getBy($pageid, 1);
$paraph2 = CParagraphe::getBy($pageid, 2);
$paraph3 = CParagraphe::getBy($pageid, 3);
$paraphFooter = CParagraphe::getFooterBy($pageid);

?>
	<div class="row">
		<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?> page-intern">
			<div class="main-contents">
				<h1 class="page-title title">
					<?php
					$titre_1 = get_field( 'titre_1', $pageid );
					echo  $paraph1->title;
					?>
				</h1>
				<?php if ( isset($paraph1->content) ):?>
					<p><?php  echo $paraph1->content; ?> </p> 
				<?php endif;?>

				<h2 class="subtitle"><?php  echo  $paraph2->title; ?></h2>
				<?php if ( isset($paraph2->content) ):?>
					<p><?php  echo $paraph2->content; ?> </p> 
				<?php endif;?>
				                               
				<h2 class="subtitle"><?php  echo  $paraph3->title; ?></h2>
				<?php if ( isset($paraph3->content) ):?>
					<p><?php  echo $paraph3->content; ?> </p> 
				<?php endif;?>
				
				<?php  echo apply_filters('the_content', $paraphFooter->content_footer ); ?>           
			</div>
		</div>

	   <?php
		if ( $layout_class == 'sidebar-right' ):
				get_sidebar();
		endif;
		?>
	</div>
<?php
get_footer();
