<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'CONSTRUCTO_DIR_URI' ) ) {
	define( 'CONSTRUCTO_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'CONSTRUCTO_DIR_ASSETS_URI' ) ) {
	define( 'CONSTRUCTO_DIR_ASSETS_URI', CONSTRUCTO_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'CONSTRUCTO_DIR_CSS_URI' ) ) {
	define( 'CONSTRUCTO_DIR_CSS_URI', CONSTRUCTO_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'CONSTRUCTO_DIR_JS_URI' ) ) {
	define( 'CONSTRUCTO_DIR_JS_URI', CONSTRUCTO_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'CONSTRUCTO_DIR_IMGS_URI' ) ) {
	define( 'CONSTRUCTO_DIR_IMGS_URI', CONSTRUCTO_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'CONSTRUCTO_DIR_ICON_IMG_URI' ) ) {
	define( 'CONSTRUCTO_DIR_ICON_IMG_URI', CONSTRUCTO_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'CONSTRUCTO_DIR_PATH' ) ) {
	define( 'CONSTRUCTO_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'CONSTRUCTO_DIR_PATH_INC' ) ) {
	define( 'CONSTRUCTO_DIR_PATH_INC', CONSTRUCTO_DIR_PATH . 'inc/' );
}

//Constructo Libraries Folder Directory
if ( ! defined( 'CONSTRUCTO_DIR_PATH_LIBS' ) ) {
	define( 'CONSTRUCTO_DIR_PATH_LIBS', CONSTRUCTO_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'CONSTRUCTO_DIR_PATH_CLASSES' ) ) {
	define( 'CONSTRUCTO_DIR_PATH_CLASSES', CONSTRUCTO_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'CONSTRUCTO_DIR_PATH_HOOKS' ) ) {
	define( 'CONSTRUCTO_DIR_PATH_HOOKS', CONSTRUCTO_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function constructo_admin_script(){
    wp_enqueue_style( 'constructo-admin', get_template_directory_uri().'/assets/css/constructo-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'constructo_admin', get_template_directory_uri().'/assets/js/constructo-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'constructo_admin_script' );



/**
 * Include File
 *
 */
require_once( CONSTRUCTO_DIR_PATH_INC . 'constructo-breadcrumbs.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'constructo-widgets-reg.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'post-like.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'constructo-functions.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'constructo-commoncss.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'support-functions.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( CONSTRUCTO_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( CONSTRUCTO_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( CONSTRUCTO_DIR_PATH_HOOKS . 'hooks.php' );
require_once( CONSTRUCTO_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( CONSTRUCTO_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Constructo object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Constructo = new Constructo();