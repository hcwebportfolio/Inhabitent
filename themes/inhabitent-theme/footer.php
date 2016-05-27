<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<div class="block">
					<h3>Contact Info</h3>
					<p><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
					<p><a href="tel:5553434567891">778-456-7891</a></p>

				</div>

				<div class="block">
					<h3>Buisness Hours</h3>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>

				</div>

				<div class="block">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="" /></a>
				</div>
				</div><!-- .site-info -->
				<div class="block">
					<p class="center">Copyright © 2016 Inhabitent</p>
				</div>


			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
