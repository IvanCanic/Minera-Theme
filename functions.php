<?php 
/**
 * Theme Functions.
 *
 * @package Minera
 */

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if ( ! defined( 'MINERA_DIR_PATH' ) ) {
	define( 'MINERA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'MINERA_DIR_URI' ) ) {
	define( 'MINERA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once MINERA_DIR_PATH . '/inc/template-tags.php';

function minera_get_theme_instance() {
    Inc\Classes\Minera::get_instance();
}

minera_get_theme_instance();