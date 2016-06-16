<?php

add_action( 'after_setup_theme', function () {
	remove_action( 'storefront_header', 'storefront_skip_links', 0 );
	remove_action( 'storefront_header', 'storefront_social_icons', 10 );
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	remove_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
	//remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

	add_action( 'storefront_header', function () {
		?>
		<nav class="secondary-navigation" role="navigation"
		     aria-label="<?php esc_html_e( 'Secondary Navigation', 'storefront' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'secondary',
					'fallback_cb'    => '',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}, 30 );
/*
	add_action( 'storefront_header', function () {
		?>
		<form role="search" method="get" class="" action="<?php get_home_url(); ?>">
			<input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Recherche rapide" value="" name="s" title="Recherche pour&nbsp;:">
			<input type="submit" value="Recherche">
			<input type="hidden" name="post_type" value="product">
		</form>
		<?php
	}, 40 );*/
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . '/lib/font-awesome-4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );
} );
