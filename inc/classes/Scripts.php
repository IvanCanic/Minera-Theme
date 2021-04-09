<?php 
/**
 * Enqueue theme assets
 *
 * @package Minera
 */

namespace Inc\Classes;

use Inc\Singleton;

class Scripts {

    use singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action( 'wp_enqueue_scripts', array( $this, 'minera_register_styles') );
        add_action( 'wp_enqueue_scripts', array( $this, 'minera_register_scripts') );
    }

    public function minera_register_styles() {

        global $minera_ver_num; // define global variable for the version number
        $minera_ver_num = mt_rand();
    
        wp_enqueue_style( 'dashicons' );
        wp_enqueue_style( 'minera-css', MINERA_DIR_URI . '/assets/css/main.css', array(), $minera_ver_num, 'all' );

    }

    public function minera_register_scripts() {

        global $minera_ver_num; // define global variable for the version number
        $minera_ver_num = mt_rand();

        wp_enqueue_script( 'minera-js', MINERA_DIR_URI . '/assets/js/main.js', [], $minera_ver_num, true );
    }
}