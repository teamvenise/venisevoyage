<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<footer id="colophon" class="site-footer footer bg-primary" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<span class="copyright">© Copyright 2018, Voyage-venise.com</span>
			<div class="right-menu-footer">
				<ul>
					<li><a href="<?php echo esc_url( get_permalink(62) ); ?>">Mentions légales</a></li>
					<li><a href="<?php echo esc_url( get_permalink(55) ); ?>">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>