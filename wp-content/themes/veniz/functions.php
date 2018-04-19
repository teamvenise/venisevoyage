<?php

/**
 * voyagevenise functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package voyagevenise
 */

// include('inc/shortcodes.php');
 require_once( get_template_directory() . '/inc/shortcodes.php' );
 require_once( get_template_directory() . '/inc/carte.class.php' );
 require_once( get_template_directory() . '/inc/paragraphe.class.php' );
 
if ( ! function_exists( 'voyagevenise_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function voyagevenise_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on voyagevenise, use a find and replace
		 * to change 'voyagevenise' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'voyagevenise', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for the custom logo functionality
		 */
		add_theme_support( 'custom-logo', array(
			'height'     => 55,
			'width'      => 135,
			'flex-width' => true,
		) );

		add_theme_support( 'custom-header', apply_filters( 'shapely_custom_header_args', array(
			'default-image'      => '',
			'default-text-color' => '000000',
			'width'              => 1900,
			'height'             => 225,
			'flex-width'         => true
		) ) );

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
		register_nav_menus( array(
			                    'primary'     => esc_html__( 'Primary', 'voyagevenise' ),
			                    'social-menu' => esc_html__( 'Social Menu', 'voyagevenise' ),
		                    ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'shapely_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'voyagevenise-full', 1110, 530, true );
		add_image_size( 'voyagevenise-featured', 730, 350, true );
		add_image_size( 'voyagevenise-grid', 350, 300, true );

		add_theme_support( 'customize-selective-refresh-widgets' );
		// Welcome screen
		if ( is_admin() ) {
			global $shapely_required_actions, $shapely_recommended_plugins;

			$shapely_recommended_plugins = array(
				'wordpress-seo'          => array( 'recommended' => true ),
				'fancybox-for-wordpress' => array( 'recommended' => false ),
			);

			/*
			 * id - unique id; required
			 * title
			 * description
			 * check - check for plugins (if installed)
			 * plugin_slug - the plugin's slug (used for installing the plugin)
			 *
			 */
			$path = WPMU_PLUGIN_DIR . '/voyagevenise-companion/inc/views/voyagevenise-demo-content.php';
			if ( ! file_exists( $path ) ) {
				$path = WP_PLUGIN_DIR . '/voyagevenise-companion/inc/views/voyagevenise-demo-content.php';
				if ( ! file_exists( $path ) ) {
					$path = false;
				}
			}

			$shapely_required_actions = array(
				array(
					"id"          => 'voyagevenise-req-ac-install-companion-plugin',
					"title"       => Shapely_Notify_System::shapely_companion_title(),
					"description" => Shapely_Notify_System::shapely_companion_description(),
					"check"       => Shapely_Notify_System::shapely_has_plugin( 'voyagevenise-companion' ),
					"plugin_slug" => 'voyagevenise-companion'
				),
				array(
					"id"          => 'voyagevenise-req-ac-install-wp-jetpack-plugin',
					"title"       => Shapely_Notify_System::shapely_jetpack_title(),
					"description" => Shapely_Notify_System::shapely_jetpack_description(),
					"check"       => Shapely_Notify_System::shapely_has_plugin( 'jetpack' ),
					"plugin_slug" => 'jetpack'
				),
				array(
					"id"       => 'voyagevenise-req-import-content',
					"title"    => esc_html__( 'Import content', 'voyagevenise' ),
					"external" => $path,
					"check"    => Shapely_Notify_System::shapely_check_import_req(),
				),

			);

			require get_template_directory() . '/inc/admin/welcome-screen/welcome-screen.php';
		}
	}
endif;
add_action( 'after_setup_theme', 'voyagevenise_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shapely_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shapely_content_width', 1140 );
}

add_action( 'after_setup_theme', 'shapely_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shapely_widgets_init() {
	register_sidebar( array(
		                  'id'            => 'sidebar-1',
		                  'name'          => esc_html__( 'Sidebar', 'voyagevenise' ),
		                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
		                  'after_widget'  => '</div>',
		                  'before_title'  => '<h2 class="widget-title">',
		                  'after_title'   => '</h2>',
	                  ) );

	register_sidebar( array(
		                  'id'            => 'sidebar-home',
		                  'name'          => esc_html__( 'Homepage', 'voyagevenise' ),
		                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
		                  'after_widget'  => '</div>',
		                  'before_title'  => '<h2 class="widget-title">',
		                  'after_title'   => '</h2>',
	                  ) );

	for ( $i = 1; $i < 5; $i ++ ) {
		register_sidebar( array(
			                  'id'            => 'footer-widget-' . $i,
			                  'name'          => sprintf( esc_html__( 'Footer Widget %s', 'voyagevenise' ), $i ),
			                  'description'   => esc_html__( 'Used for footer widget area', 'voyagevenise' ),
			                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
			                  'after_widget'  => '</div>',
			                  'before_title'  => '<h2 class="widget-title">',
			                  'after_title'   => '</h2>',
		                  ) );
	}

}

add_action( 'widgets_init', 'shapely_widgets_init' );

/**
 * Hides the custom post template for pages on WordPress 4.6 and older
 *
 * @param array $post_templates Array of page templates. Keys are filenames, values are translated names.
 *
 * @return array Filtered array of page templates.
 */
function shapely_exclude_page_templates( $post_templates ) {

	if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
		unset( $post_templates['page-templates/full-width.php'] );
		unset( $post_templates['page-templates/no-sidebar.php'] );
		unset( $post_templates['page-templates/sidebar-left.php'] );
		unset( $post_templates['page-templates/sidebar-right.php'] );
	}

	return $post_templates;
}

add_filter( 'theme_page_templates', 'shapely_exclude_page_templates' );

/**
 * Enqueue scripts and styles.
 */
function shapely_scripts() {
	// Add Bootstrap default CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

	// Add Font Awesome stylesheet
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/inc/css/font-awesome.min.css' );

	/* Add Google Fonts
	wp_enqueue_style( 'voyagevenise-fonts', '//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700%7COpen+Sans:400,500,600' );
	*/

	// Add custom typography
	wp_enqueue_style( 'typo', get_template_directory_uri() . '/css/commonStyles/typo.css' );

	// Add slider CSS
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/inc/css/flexslider.css' );

	//Add custom theme css
	wp_enqueue_style( 'voyagevenise-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/commonStyles/slider.css' );

	wp_enqueue_style( 'homepage', get_template_directory_uri() . '/css/elements/homepage.css' );

	wp_enqueue_style( 'transfertStyle', get_template_directory_uri() . '/css/elements/transfertStyle.css' );

	wp_enqueue_style( 'pagesStyle', get_template_directory_uri() . '/css/elements/pagesStyle.css' );

	wp_enqueue_style( 'hebergement', get_template_directory_uri() . '/css/elements/hebergement.css' );

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/slick/slick.css' );

	wp_enqueue_script( 'voyagevenise-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'myScript', get_template_directory_uri() . '/js/myScript.js', array(), '20120206', true );

	wp_enqueue_script( 'voyagevenise-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160115', true );

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	if ( post_type_exists( 'jetpack-portfolio' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}

	// Add slider JS
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array( 'jquery' ), '20160222', true );

	if ( is_page_template( 'page-templates/template-home.php' ) ) {
		wp_enqueue_script( 'voyagevenise-parallax', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), '20160115', true );
	}
	/**
	 * OwlCarousel Library
	 * 	wp_enqueue_style( 'voyagevenise-scss', get_template_directory_uri() . '/assets/css/style.css' );
	 */
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '20160115', true );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.carousel.theme', get_template_directory_uri() . '/js/owl-carousel/owl.theme.default.css' );

	wp_enqueue_script( 'voyagevenise-scripts', get_template_directory_uri() . '/js/voyagevenise-scripts.js', array( 'jquery' ), '20160115', true );

}

add_action( 'wp_enqueue_scripts', 'shapely_scripts' );

add_action( 'init', 'venise_post_type', 0 );
function venise_post_type() {
     $labels = array(
			'name'                => _x( 'Carte', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Nom', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Carte', 'text_domain' ),
			'all_items'           => __( 'Toutes les cartes', 'text_domain' ),
			'view_item'           => __( 'Voir', 'text_domain' ),
			'add_new_item'        => __( 'Ajouter nouveau', 'text_domain' ),
			'add_new'             => __( 'Ajouter nouveau', 'text_domain' ),
			'edit_item'           => __( 'Modifier', 'text_domain' ),
			'update_item'         => __( 'Mettre a jour', 'text_domain' ),
			'search_items'        => __( 'Rechercher', 'text_domain' ),
			'not_found'           => __( 'Aucune carte', 'text_domain' ),
			'not_found_in_trash'  => __( 'Aucune carte', 'text_domain' ),
	);
	$args = array(
			'label'               => __( 'Carte', 'text_domain' ),
			'description'         => __( 'Carte', 'text_domain' ),
			'labels'              => $labels,
			'supports'            =>   array( 'title', 'editor', 'custom-fields','thumbnail' ),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 4,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
	);
	register_post_type( 'carte', $args );

         // Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genre', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'carte' ), $args );
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Add custom section
 */
require get_template_directory() . '/inc/voyagevenise-documentation/class-customize.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

/**
 * Load Social Navition
 */
require get_template_directory() . '/inc/socialnav.php';

/**
 * Load related posts
 */
require get_template_directory() . '/inc/class-voyagevenise-related-posts.php';

/**
 * Load the system checks ( used for notifications )
 */
require get_template_directory() . '/inc/admin/welcome-screen/notify-system-checks.php';

