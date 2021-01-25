<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

					<header class="page-header text-center">
						<div class="row">
							<div class="column column-60 column-offset-20">
								<h1 class="page-title"><?php esc_html_e( 'Publication', 'wpxpress' ); ?></h1>

								<div class="hero-category-list">
									<ul>
										<li><a href="#">WordPress</a></li>
										<li><a href="#">Security</a></li>
										<li><a href="#">WooCommerce</a></li>
										<li><a href="#">Speed Up</a></li>
										<li><a href="#">Tutorial</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Development</a></li>
										<li><a href="#">Marketing</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>

								<div class="hero-search-area">
									<form role="search" method="get" action="<?php site_url(); ?>">
										<input type="text" name="s" id="s" placeholder="Search here...">
										<input type="hidden" value="post" name="post_type">
									</form>
								</div>
							</div>
						</div>
					</header>

					<?php if ( have_posts() ) {

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

			<?php get_template_part( 'template-parts/subscribe-newsletter' ) ?>

		</div>
	</main>

<?php
get_footer();
