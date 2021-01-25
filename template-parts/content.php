<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpXpress
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<?php if ( has_post_thumbnail() ) { ?>
	<div class="column">
		<?php wpxpress_post_thumbnail(); ?>
	</div>
	<?php } ?>

	<div class="column">
		<div class="post-details">
			<header class="entry-header">
				<?php
				if ( 'post' === get_post_type() ) {
					wpxpress_posted_in();
				}

				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</header>

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>

			<footer class="entry-footer"></footer>
		</div>
	</div>
</article>
