<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wpXpress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found">
			<div class="container">
				<div class="row">
					<div class="column column-50 column-offset-25 text-center">

						<header class="page-header">
							<span class="error-404-alert">404!</span>

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpxpress' ); ?></h1>

							<p>It looks like nothing was found at this location. You may <a href="<?php echo home_url(); ?>">go back to home</a> or try searching for something else.</p>

							<?php get_search_form(); ?>
						</header>
						
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
