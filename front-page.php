<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

	<main id="primary" class="site-main">
		
		<header class="home-hero">
			<div class="container">
				<div class="row">

					<div class="column column-60">
						<div class="home-hero-content">
							<h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
							<p> Doloremque corrupti sunt molestiae ad, doloribus cum vero enim dolore odio natus unde, similique, maxime fugiat harum repellat totam ut? Quo, necessitatibus.</p>

							<a href="#" class="button">Get in Touch</a>
							<a href="#" class="button button-outline">About Us</a>

						</div>
					</div>

				</div>
			</div>
		</header>

		<section class="home-featured-by text-center">
			<div class="container">
				<div class="row">

					<div class="column">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/wpmudev.png" alt="Wpmudev Logo">
					</div>
					<div class="column">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Learnwoo.png" alt="Wpmudev Logo">
					</div>
					<div class="column">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudways.png" alt="Wpmudev Logo">
					</div>
					<div class="column">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/wpexplorer.png" alt="Wpmudev Logo">
					</div>

				</div>
			</div>
		</section>

		<section class="home-products">
			<div class="container">
				<div class="row">
					<div class="column column-60">
						<h2>Our Products</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Alias eligendi eos quia nostrum voluptates.</p>
					</div>
				</div>

				<div class="row row-wrap">

					<div class="column column-33">
						<div class="product-item">

							<div class="product-item__image">
								<img src="https://www.joomshaper.com/images/2020/01/17/startuplanding-thumb.jpg" alt="">

								<div class="product-item__image-overlay text-center">
									<a href="#" class="button button-outline">Preview</a>
									<a href="#" class="button button-outline">Details</a>
								</div>
							</div>

							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="column column-33">
						<div class="product-item">
							<div class="product-item__image"></div>
							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="column column-33">
						<div class="product-item">
							<div class="product-item__image"></div>
							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="column column-33">
						<div class="product-item">
							<div class="product-item__image"></div>
							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="column column-33">
						<div class="product-item">
							<div class="product-item__image"></div>
							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
					
					<div class="column column-33">
						<div class="product-item">
							<div class="product-item__image"></div>
							<div class="product-item__content">
								<h3 class="product-item__title">Blacki - WordPress Business Theme</h3>
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>

	</main>

<?php
get_footer();
