<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpXpress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

	<?php if ( is_active_sidebar('footer-widgets') ) { ?>
	<section class="site-footer-widget-area">
		<div class="container">
			<div class="row">

				<div class="colum column-50">
					<h4><?php esc_html_e( 'wpXpress', 'wpXpress' ); ?></h4>
					<p><?php esc_html_e( 'Test to make sure that the editor and the front match.', 'wpxpress' ); ?></p>
				</div>

				<?php dynamic_sidebar('footer-widgets'); ?>

			</div>
		</div>
	</section>
	<?php } ?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="column">
					<div class="site-info">
						<?php printf("<p>Copyright © %u <span class='sep'> | </span> All Rights Reserved by wpXpress.net</p>", date('Y')); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
