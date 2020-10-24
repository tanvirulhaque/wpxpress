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
					<div class="column column-80 column-offset-10 text-center">

						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpxpress' ); ?></h1>
						</header>

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wpxpress' ); ?></p>

								<?php get_search_form(); ?>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
