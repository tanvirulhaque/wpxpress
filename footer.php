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

?>
	<?php if ( is_active_sidebar('footer-widgets') ) { ?>
	<section class="site-footer-widget-area">
		<div class="container">
			<div class="row">
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
						<p>Copyright © <?php echo date('Y'); ?><span class="sep"> | </span>All Rights Reserved by wpXpress.net</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
