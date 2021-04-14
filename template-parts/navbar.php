<?php
/**
 * Navbar template
 * 
 * @package Minera
 */
?>

<nav class="navbar" role="navbar">
<div class="container">

    <?php 
    $minera_logo_id = get_theme_mod( 'custom_logo' );
    $minera_logo = wp_get_attachment_image_src( $minera_logo_id , 'full' );
    
    if ( has_custom_logo() ) {
        echo '<a href="' . esc_attr(home_url('/')) . '" class="navbar__brand"><img src="' . esc_url( $minera_logo[0] ) . '" alt="' . esc_attr(get_bloginfo( 'name' )) . '"></a>';
    } else {
    echo '<a href="' . esc_attr(home_url('/')) . '" class="navbar__brand">' . esc_attr(get_bloginfo( 'name' )) . '</a>';
    } 
    ?>

    <button type="button" class="navbar__toggle">
        <span class="dashicons dashicons-menu-alt3"></span>
    </button>
    <?php 
        wp_nav_menu( [ 
            'menu'   => '',
            'container'            => '',
            'container_class'      => '',
            'container_id'         => '',
            'container_aria_label' => '',
            'menu_class'           => 'navbar__list',
            'menu_id'              => '',
            'echo'                 => true,
            'fallback_cb'          => false,
            'before'               => '',
            'after'                => '',
            'link_before'          => '',
            'link_after'           => '',
            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing'         => 'preserve',
            'depth'                => 0,
            'walker'               => '',
            'theme_location'       => 'primary'
        ]);
    ?>
</div>
</nav>