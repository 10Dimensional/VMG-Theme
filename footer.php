<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VMG_theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-top">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6664.710152054552!2d-111.81905964004383!3d33.36179485706219!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872ba9abb73f4377%3A0x9b448f56963e13b3!2sEast+Valley+Maintenance+Group!5e0!3m2!1sen!2sus!4v1416268953512" width="50%" height="430" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="footer-form">
				<form>
					<h1>Contact Us</h1>
					<h4>VALLEY MAINTENANCE GROUP</h4>
					<p>623.234.2550  |  <span>info@vmgaz.com</span></p>
					<input type="text" placeholder="FIRST NAME">
					<input type="text" placeholder="LAST NAME">
					<textarea placeholder="YOUR MESSAGE TO VMG"></textarea>
					<input type="submit" value="SUBMIT">
				</form>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="left">
				<img src="<?php bloginfo('template_url'); ?>/images/BBBlogo.png" width="150">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</div>
			<div class="right">
				<p>©2015 Valley Maintenance Group. All Rights Reserved | Site by Lucid Agency</p>
			</div>
		</div>
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'vmg_theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'vmg_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'vmg_theme' ), 'VMG_theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
