<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
				<div class="column column-70 column-offset-15">
					<?php
					while ( have_posts() ) {
						the_post();

						if ( 'post' === get_post_type() && is_single() ) {
						?>

						<div class="post-sticky-box" id="sticky-box">
							<div class="sticky-navigation">
								<span class="sticky-title">Contents</span>
								<ul>
									<li><a title="What you need to know to be successful" href="#how-to-be-successful">What you need to know to be successful</a></li>
									<li><a title="How to do enterprise SEO" href="#how-to-do-enterprise-seo">How to do enterprise SEO</a></li>
								</ul>
							</div>

							<div class="sticky-social-share">
								<span class="sticky-title">Share this article</span>
								<ul>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
								</ul>
							</div>
						</div>

						<?php
						}

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wpxpress' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wpxpress' ) . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

					}
					?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
