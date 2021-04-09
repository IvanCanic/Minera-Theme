<?php
/**
 * Bootstraps the Theme.
 *
 * @package Minera
 */

namespace Inc\Classes;

use Inc\Singleton;

class Minera {
	
	use Singleton;

	protected function __construct() {

		// Load class.
		Scripts::get_instance();
		Sidebar::get_instance();
		//Menus::get_instance();
		//Meta_Boxes::get_instance();
		//Sidebars::get_instance();
		//Blocks::get_instance();
		//Block_Patterns::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup_theme() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 100,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);

		add_theme_support(
			'custom-background',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
				'default-repeat' => 'no-repeat',
			]
		);

		add_theme_support( 
			'custom-header', 
			[   'default-image'      => '',
				'default-text-color' => 'ffffff',
				'width'              => 1000,
				'height'             => 250,
				'flex-width'         => true,
				'flex-height'        => true,
			]
	 	);

		add_theme_support( 'widgets' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

		add_image_size( 'featured-thumbnail', 350, 233, true );

		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

		// Gutenberg theme support.

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );
		
		add_editor_style();

		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1240;
		}
	}

}