<?php
/**
 * Class for creating menus
 * 
 * @package Minera
 */

namespace Inc\Classes;

use Inc\Singleton;

class Menus {

    use Singleton;

    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action('after_setup_theme', [$this, 'register_menu']);
    }

    public function register_menu() {
        register_nav_menu( 'primary', __( 'Primary Menu', 'minera' ) );
    }

}