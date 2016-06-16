<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . '/lib/font-awesome-4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );
} );

add_action( 'after_setup_theme', function () {
	remove_action( 'storefront_header', 'storefront_skip_links', 0 );
	remove_action( 'storefront_header', 'storefront_social_icons', 10 );
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	//remove_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
	//remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
} );

add_action( 'storefront_header', function () {
	?>
	<div class="grey-bar">

	</div>
	<div class="colored-bar">
		<ul>
			<li class="rouge">Truc en rouge</li>
			<li class="bleu">Machin en bleu</li>
			<li class="orange">Bidule en orange</li>
			<li class="violet">Chose en violet</li>
		</ul>
	</div>
	<?php
}, 41 );