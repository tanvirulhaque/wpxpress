<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wpXpress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<div class="column column-80 column-offset-10">
					<?php if ( have_posts() ) { ?>

						<header class="page-header text-center">
							<h1 class="page-title">
								<?php
								printf( esc_html__( 'Search Results for: %s', 'wpxpress' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header>

						<?php
						while ( have_posts() ) {
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

						}

						the_posts_pagination();

					} else {

						get_template_part( 'template-parts/content', 'none' );

					}
					?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
