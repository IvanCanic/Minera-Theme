<?php
/**
* Sidebar area for widgets
* 
* @package Minera
*/

namespace Inc\Classes;

use Inc\Singleton;

class Sidebar {

    use singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('widgets_init', [ $this, 'minera_register_sidebars']);
    }

    public function minera_register_sidebars() {
            register_sidebar( [
            'name'          => __( 'Minera Sidebar', 'minera' ),
            'id'            => 'minera-sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'minera' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
            ] 
        );

    }

}