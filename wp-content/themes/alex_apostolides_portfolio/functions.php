<?php
/**
 * Alex Apostolides Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alex_Apostolides_Portfolio
 */

if ( ! function_exists( 'alex_apostolides_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function alex_apostolides_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Alex Apostolides Portfolio, use a find and replace
	 * to change 'alex_apostolides_portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'alex_apostolides_portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	//add_theme_support( 'automatic-feed-links' );

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
	add_theme_support( 'custom-header' );

	// This theme uses wp_nav_menu() in one location.


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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	/*
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	*/

	// Set up the WordPress core custom background feature.

/*
	add_theme_support( 'custom-background', apply_filters( 'alex_apostolides_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	*/
}
endif;
add_action( 'after_setup_theme', 'alex_apostolides_portfolio_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alex_apostolides_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alex_apostolides_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'alex_apostolides_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

function alex_apostolides_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'alex_apostolides_portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'alex_apostolides_portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'alex_apostolides_portfolio_widgets_init' );
 */
/**
 * Enqueue scripts and styles.
 */
function alex_apostolides_portfolio_scripts() {
	wp_enqueue_style( 'alex_apostolides_portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'alex_apostolides_portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'alex_apostolides_portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'jquery' );

    // Register and Enqueue a Script
    // get_stylesheet_directory_uri will look up child theme location

    wp_register_script( 'pace', get_stylesheet_directory_uri() . '/js/pace.js', '');
    wp_enqueue_script( 'pace' );

    wp_register_script( 'preview', get_stylesheet_directory_uri() . '/js/preview.js', array('jquery'));
    wp_enqueue_script( 'preview' );

    wp_register_script( 'projectloader', get_stylesheet_directory_uri() . '/js/projectloader.js', array('jquery'));
    wp_enqueue_script( 'projectloader' );


if ( is_page('front-page')) {
    wp_register_script( 'threemin', get_stylesheet_directory_uri() . '/js/three.min.js', '');
    wp_enqueue_script( 'threemin' );

    wp_register_script( 'three', get_stylesheet_directory_uri() . '/js/three.js', '');
    wp_enqueue_script( 'three' );

    wp_register_script( 'objloader', get_stylesheet_directory_uri() . '/js/OBJLoader.js', '');
    wp_enqueue_script( 'objloader' );

    wp_register_script( 'cube', get_stylesheet_directory_uri() . '/js/cube.js', '', '', true);
    wp_enqueue_script( 'cube' );
}

    wp_register_script( 'videoScrollLoader', get_stylesheet_directory_uri() . '/js/videoScrollLoader.js', '');
    wp_enqueue_script( 'videoScrollLoader' );   

    wp_register_script( 'sectionDisplay', get_stylesheet_directory_uri() . '/js/sectionDisplay.js', '');
    wp_enqueue_script( 'sectionDisplay' );   

}
add_action( 'wp_enqueue_scripts', 'alex_apostolides_portfolio_scripts' );






// Alex Apostolides Custom Fonts
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/afe1njl.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );










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




//------------------------------------------------------------------------------------------------------------------------------
// ALEX APOSTOLIDES CUSTOM CMS STUFF
//------------------------------------------------------------------------------------------------------------------------------



function remove_menus(){


remove_menu_page( 'edit.php' );	// Removes Posts
remove_menu_page( 'edit-comments.php' );	// Removes Comments


}

add_action( 'admin_menu', 'remove_menus' );


//------------------------------------------------------------------------------------------------------------------------------
// ALEX APOSTOLIDES CUSTOM Visual Editor
//------------------------------------------------------------------------------------------------------------------------------


//Custom Styles


function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );



// Custom Header styles
function wpb_mce_buttons_2($formats) {
	array_unshift($formats, 'styleselect');
	return $formats;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Home Page Name',  
			'block' => 'span',  
			'classes' => 'home-page-name',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Home Page Job Description',  
			'block' => 'span',  
			'classes' => 'home-page-job-description',
			'wrapper' => true,
		),
		array(  
			'title' => 'Content Title',  
			'block' => 'div',  
			'classes' => 'contentTitle',
			'wrapper' => true,
		),
		array(  
			'title' => 'Description',  
			'block' => 'div',  
			'classes' => 'contentDescription',
			'wrapper' => true,
		),
		array(  
			'title' => 'Portrait Video',  
			'block' => 'div',  
			'classes' => 'portraitVideo',
			'wrapper' => false,
		),
		array(  
			'title' => 'Featured Gif',  
			'block' => 'div',  
			'classes' => 'featuredGif',
			'wrapper' => false,
		),
		array(  
			'title' => '3x4 Portrait',  
			'block' => 'div',  
			'classes' => 'threeByFourPortrait',
			'wrapper' => false,
		),
		array(  
			'title' => '9x16 Portrait',  
			'block' => 'div',  
			'classes' => 'nineBySixteenPortrait',
			'wrapper' => false,
		),
		array(  
			'title' => '16x9 Landscape',  
			'block' => 'div',  
			'classes' => 'sixteenByNineLandscape',
			'wrapper' => false,
		),
		array(  
			'title' => 'Section',  
			'block' => 'div',  
			'classes' => 'section',
			'wrapper' => false,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 



// Remove Admin Bar

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {

  show_admin_bar(false);

}


//WORDPRESS VIDEO STYLE STRIPPER


add_filter('wp_video_shortcode_library','no_mediaelement');


// function no_mediaelement_scripts() {
//     wp_dequeue_script( 'wp-mediaelement' );
//     wp_deregister_script( 'wp-mediaelement' );
// }

function no_mediaelement() {
    return '';
}

