<?php
	/**
	* Template Name: Front Page
	*
	* @package masupasal
	* @subpackage masupasal
	* @since masupasal 1.0
	*/

	get_header();
	?>	
	<main id="primary" class="site-main">
		<div class="slick-fade_hero d-none">
			<div>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
				<div class="position-absolute z-index-1 bottom-0 slick-caption text-white p-3"><h1>Captions goes here</h1></div>
				<div class="image image-16-9 d-none">
					<figure>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
						</a>
					</figure>
				</div>				
			</div>	
			<div>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
				<div class="position-absolute z-index-1 bottom-0 slick-caption text-white p-3"><h1>Captions goes here</h1></div>
				<div class="image image-16-9 d-none">
					<figure>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
						</a>
					</figure>
				</div>				
			</div>	
			<div>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
				<div class="position-absolute z-index-1 bottom-0 slick-caption text-white p-3"><h1>Captions goes here</h1></div>
				<div class="image image-16-9 d-none">
					<figure>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/hero-1.png" alt="MasuPasal">
						</a>
					</figure>
				</div>				
			</div>	
		</div>
		<div class="container pt-5">
			<h5 class="text-center">What are you looking for?</h5>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'get_post_type()' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div> <!-- container ends here -->
		<div class="bg-white mt-5 mb-4 pt-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/front-img-action-masupasal.png" alt="" class="img-fluid">
					</div>
					<div class="col-lg-6">
						<div class="pl-lg-5 pb-5 pt-5 pt-lg-0">
							<h2 class="font-weight-bold pb-3">About Us</h2>
							<p>We are the World Class meat processing, packaging and supplying company in Nepal. We’ve over a 35 years of butchers experience and prepare your meat just the way you like it and always happy to help. Suppliers of variety of quality chicken, mutton, buff, pork and weekly special offers to ensure that your fridge is full of your wallet is happy. So take a look at what we can offer you, and please drop an email with your queries.</p><p> Please email us your requirements through email to <a href="mailto:info@masupasal.com.np" title="Email Us">info@masupasal.com.np</a> and we will get back to you.</p>
						 </div>
					</div>
				</div>
			</div>
		</div> <!-- about us section ends here -->
		<div class="container pt-4">
			<div class="row">
				<div class="col-md-4">
					<div class="slick-slide_promos pb-3 pb-md-0">
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
					</div> <!--  promos for you slick slider ends here -->
				</div> <!--  promos for you col md 4 ends here -->
				<div class="col-md-4">
					<div class="slick-slide_promos pb-3 pb-md-0">
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
					</div> <!--  promos for you slick slider ends here -->
				</div> <!--  promos for you col md 4 ends here -->
				<div class="col-md-4">
					<div class="slick-slide_promos">
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
						<div>
							<img src="<?php bloginfo('template_url'); ?>/assets/images/promo4.jpg" alt="" class="img-fluid">
						</div> <!--  promos for you items ends here -->
					</div> <!--  promos for you slick slider ends here -->
				</div> <!--  promos for you col md 4 ends here -->
			</div><!-- promos for you row ends here -->
		</div> <!-- promos for you container ends here -->
		<div class="bg-white mt-5 mb-4 pt-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="pr-md-5 pb-3">
							<h2 class="font-weight-bold pb-3">Processing and Packaging</h2>
							<p>At MasuPasal, we offer advance technology based quality processing and packaging of mutton, chicken, buff, pork and fish. Our inspected processing facility provides quality cuts of portion controlled meats to meat retailers, restaurants and hotels. Work with us and we can supply you with the portions and cuts that best meet the needs of your business.</p><p>Please email us your requirements through email to <a href="mailto:info@masupasal.com.np" title="Email Us">info@masupasal.com.np</a> and we will get back to you.</p>
						 </div>
					</div>
					<div class="col-lg-5">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/front-img2-team-masupasal.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div> <!-- about us section ends here -->
	</main>
	<?php
	get_sidebar();
	get_footer();