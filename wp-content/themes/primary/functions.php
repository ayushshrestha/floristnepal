<?php
/**
 * masupasal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package masupasal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'masupasal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	// To change add to cart text on single product page
	add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
	function woocommerce_custom_product_add_to_cart_text() {
		return __( 'Order Now', 'woocommerce' );
	}


	function woo_custom_change_cart_string($translated_text, $text, $domain) {
		$translated_text = str_replace("view cart", "View Order", $translated_text);
		$translated_text = str_replace("View cart", "View Order", $translated_text);
		return $translated_text;
	}
	add_filter('gettext', 'woo_custom_change_cart_string', 100, 3);
	add_filter('ngettext', 'woo_custom_change_cart_string', 100, 3);



	function wc_remove_checkout_fields( $fields ) {

		// Billing fields
		unset( $fields['billing']['billing_last_name'] );
		$fields['billing']['billing_first_name']['label'] = 'Full Name'; 
		$fields['billing']['billing_first_name']['placeholder'] = 'Full Name'; 
		unset( $fields['billing']['billing_company'] );
		unset( $fields['billing']['billing_country'] );
		unset( $fields['billing']['billing_address_2'] );
		unset( $fields['billing']['billing_state'] );
		unset( $fields['billing']['billing_postcode'] );
		
		
		unset( $fields['shipping']['shipping_company'] );
		unset( $fields['shipping']['shipping_last_name'] );
		$fields['shipping']['shipping_first_name']['label'] = 'Full Name'; 
		$fields['shipping']['shipping_first_name']['placeholder'] = 'Full Name'; 
		unset( $fields['shipping']['shipping_company'] );
		unset( $fields['shipping']['shipping_country'] );
		unset( $fields['shipping']['shipping_address_2'] );
		unset( $fields['shipping']['shipping_state'] );
		unset( $fields['shipping']['shipping_postcode'] );

		
		$fields['billing']['billing_address_1']['label'] = 'Address'; 
		$fields['billing']['billing_address_1']['placeholder'] = 'Eg. Ganesthan Marg, Chabahil'; 

		
		$fields['shipping']['shipping_address_1']['label'] = 'Address'; 
		$fields['shipping']['shipping_address_1']['placeholder'] = 'Eg. Ganesthan Marg, Chabahil'; 

		return $fields;
	}
	add_filter( 'woocommerce_checkout_fields', 'wc_remove_checkout_fields' );


	function masupasal_setup() {


		$defaults = array(
			'height'      => 20,
			'width'       => 20,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
		
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on masupasal, use a find and replace
		 * to change 'masupasal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'masupasal', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'masupasal' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'masupasal_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);


		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 600
		));

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'masupasal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function masupasal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'masupasal_content_width', 640 );
}
add_action( 'after_setup_theme', 'masupasal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function masupasal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'masupasal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'masupasal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'masupasal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function masupasal_scripts() {
	wp_enqueue_style( 'masupasal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'masupasal-style', 'rtl', 'replace' );
	wp_enqueue_style( 'masupasal-style-min', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.1', 'all');

	wp_enqueue_script( 'masupasal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masupasal-jquery-min', get_template_directory_uri() . '/assets/js/vendor/jquery-3.2.1.slim.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masupasal-poppery-min', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masupasal-bootstrap-min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masupasal-slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masupasal-meanmenu', get_template_directory_uri() . '/assets/js/vendor/jquery.meanmenu.min.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'masupasal-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'masupasal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

