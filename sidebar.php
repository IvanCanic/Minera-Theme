<?php
/**
 * Sidebar area
 * 
 * @package Minera
 */
?>

<?php

if ( is_active_sidebar( 'minera-sidebar' ) ) {
    dynamic_sidebar( 'minera-sidebar' );
} else {
    the_widget( 'WP_Widget_Search' );
}