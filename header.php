<!DOCTYPE html>
<html <?php get_language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>
    <?php wp_body_open(  ); ?>
    <a class="skip-link screen-reader-text" href="#content" tabindex="1"><?php esc_html_e( 'Skip to content', 'minera' ); ?></a>
    <header 
        class="header" 
    <?php if( has_header_image()) : ?>
        style="background-image:url(<?php echo esc_url(get_header_image()); ?>);"
    <?php endif; ?>
    >
    <?php if( ! has_header_image()) : ?>
        <div class="container">
            <h2 class="header__title"><?php bloginfo( 'name' ); ?></h2>
            <h3 class="header__subtitle"><?php bloginfo( 'description' ); ?></h3>
        </div>
    <?php endif; ?>
    </header>
    
    <?php get_template_part( 'template-parts/navbar' ); ?>