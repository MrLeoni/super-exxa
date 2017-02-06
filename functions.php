<?php
/**
 * Global Medicamentos functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Global_Medicamentos
 */

if ( ! function_exists( 'global_medicamentos_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function global_medicamentos_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Global Medicamentos, use a find and replace
	 * to change 'global-medicamentos' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'global-medicamentos', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Cabeçalho', 'global-medicamentos' ),
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
	add_theme_support( 'custom-background', apply_filters( 'global_medicamentos_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'global_medicamentos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function global_medicamentos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'global_medicamentos_content_width', 640 );
}
add_action( 'after_setup_theme', 'global_medicamentos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function global_medicamentos_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'global-medicamentos' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'global-medicamentos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'global_medicamentos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function global_medicamentos_scripts() {
	wp_enqueue_style( 'global-medicamentos-style', get_stylesheet_uri() );

	wp_enqueue_script( 'global-medicamentos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'global-medicamentos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'global_medicamentos_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Redirect to page "Produtos" after the user logged in
function login_redirect() {
	return home_url( '/produtos' );
}

add_filter( 'login_redirect', 'login_redirect' );

// Redirect to page "Produtos" after the user registers
function register_redirect() {
	return home_url( '/produtos' );
}

add_filter( 'registration_redirect', 'register_redirect' );

// Get a custom stylesheet to change the style on login page
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Link logo on login page to our website
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Change title attribute on logo in logi page
function my_login_logo_url_title() {
    return 'Global Medicamentos';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
 * Register "Complementos" custom post type
 */
add_action("init", "complementos");
function complementos() {
	
	$labels = array("name" => "Complementos", "singular_name" => "Complemento");
	$args = array(
		"labels"	=> $labels,
		"description"	=> "Espaço para conteúdo adicional do site, como por exemplo: Banners, Posts para formulários e Newsletter.",
		"public"	=> true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_menu"	=> true,
		"show_ind_admin_bar"=> true,
		"menu_position"	=>	20,
		"menu_icon"	=> "dashicons-plus",
		"capability_type"	=>	"post",
		"supports" => array("title", "editor", "thumbnail"),
	);
	
	register_post_type("complementos", $args);
}

/**
 * Register "Categorias" custom taxonomy for "Complementos" post type
 */
add_action("init", "custom_cat");
function custom_cat() {
	$labels = array(
		'name'              => _x( 'Categorias', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categoria', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Procurar Categorias', 'textdomain' ),
		'all_items'         => __( 'Todos os Categorias', 'textdomain' ),
		'parent_item'       => __( 'Parente Categorias', 'textdomain' ),
		'parent_item_colon' => __( 'Parentes Categorias:', 'textdomain' ),
		'edit_item'         => __( 'Editar Categoria', 'textdomain' ),
		'update_item'       => __( 'Atualizar Categoria', 'textdomain' ),
		'add_new_item'      => __( 'Adicionar Nova Categoria', 'textdomain' ),
		'new_item_name'     => __( '', 'textdomain' ),
		'menu_name'         => __( 'Categorias', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'categorias' ),
	);
	register_taxonomy("categorias", "complementos", $args );
}