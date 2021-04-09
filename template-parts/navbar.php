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
    <ul class="navbar__list">
        <li><a href="#">Blog</a></li>
        <li>
            <ul>
                <li><a href="#">Blog</a></li>
                <li>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Kontakt</a></li>
                        <li><a href="#">O meni</a></li>
                    </ul>
                    <a href="#">Kontakt</a></li>
                <li><a href="#">O meni</a></li>
            </ul>
            <a href="#">Kontakt</a></li>
        <li><a href="#">O meni</a></li>
    </ul>
</div>
</nav>