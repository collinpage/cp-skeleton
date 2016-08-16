<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	<div class="push sf-block"></div>
	<footer id="colophon" class="site-footer sf-block" role="contentinfo">
		<div class="footer_wrapper">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'f-main-menu', 'container_class' => 'f-main-menu center' ) ); ?>
				<?php do_action('wpml_add_language_selector'); ?>
			</div> <!-- .container -->
		</div>
				
		<div class="site-info">
			<div class="container">
				<div class="center">
					<div class="copyright">
						<span class="site-title">© <?php echo date('Y'); echo " "; echo blogInfo('name'); _e(" All Rights Reserved. Web Design by ", "twentysixteen-child") ?><a href="http://www.generation360.ca/"><img src="http://wp-framework.dev/wp-content/uploads/2016/07/generation.png" alt="Logo Generation"/></a></span>
						<span> <?php _e("Powered by the social financing platform ", "twentysixteen-child") ?><?php __( 'Powered by the social financing platform ', 'twentysixteen-child' ); ?><a href="http://odetechnologies.com/"><img src="http://wp-framework.dev/wp-content/uploads/2016/07/odeTechnologies.png" /></a></span>
					</div>
				</div> <!-- .container -->
			</div> <!-- .container -->
		</div> <!-- .site-info -->
	</footer> <!-- .site-footer -->
<div> <!-- .stickyFooter -->

<?php wp_footer(); ?>

</body>
</html>
