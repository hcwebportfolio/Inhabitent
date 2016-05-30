<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package inhabitent_Theme
 */
?>

 <div class="contact-info">
	 <p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
	

 </div>
<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
