<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drama_Forum
 */

?>

	<footer class="site-footer p-3 bg-dark-gray d-flex flex-wrap justify-content-between">
		<p class='text-white mb-0'><a href='/privacy-policy'>Privacy Policy</a> / <a href="/terms-and-condition">Terms and Conditions</a> / <a href="/contact-us">Contact Us</a></p>
		<p class='text-white mb-0'>&copy; <?php echo date("Y") ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
