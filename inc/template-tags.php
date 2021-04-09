<?php 
/**
 * Template tags helpers.
 *
 * @package Minera
 */

function minera_article_categories() {

    $categories = get_the_category();

    foreach($categories as $category) {

        echo '<li><span class="dashicons dashicons-category"></span><a href="' . esc_url(get_category_link( $category->term_id )) . '">' . esc_html($category->name) . '</a></li>';

    }

}

function minera_posted_by() {
    
    printf(
        '<div class="article__author"><span class="dashicons dashicons-admin-users"></span>%1$s<a href="%2$s"> %3$s</a></div>', 
        esc_html( 'by ', 'minera' ), 
        esc_url(get_author_posts_url(get_the_author_meta('ID'))), esc_html(get_the_author()) 
    );

}

function minera_comments_info() {

    printf('<span class="dashicons dashicons-format-status"></span><a href="%1$s">%2$s</a>', esc_url(get_comments_link()), esc_html('Leave a comment', 'minera'));

}

function minera_pagination() {

    $allowedTags = array(
        'span' => array(
            'class' => array()
        ),
        'a' => array(
            'class' => array(),
            'href' => array()
        )
    );

    printf('<div class="article__pagination">%1$s</div>', wp_kses( paginate_links(), $allowedTags ));

}

function minera_link_pages() {

    $allowedTags = array(
        'span' => array(
            'class' => array()
        ),
        'a' => array(
            'class' => array(),
            'href' => array()
        )
    );

    printf('<div class="article__pagination">%1$s</div>', wp_kses( wp_link_pages(['echo' => false]), $allowedTags ));
}

function minera_the_content() {

    if( is_single() OR is_page() ) {

        wp_kses_post( the_content() );

    } else {

        wp_kses_post( the_excerpt() );

    }
}

function minera_posted_at() {

    printf('<div class="article__date"><span class="dashicons dashicons-calendar-alt"></span>%1$s</div>', esc_html(get_the_date("F j, Y")));
}

function minera_get_prev_and_next_post($id) {

    $thumbnail = get_the_post_thumbnail($id, array(100,100) );
    $allowedTags = array(
        'img' => array(
            'class' => array(),
            'src' => array(),
            'loaded' => array(),
            'alt' => array(),
            'width' => array(),
            'height' => array()
        ),
    );

    printf('%1$s', wp_kses($thumbnail, $allowedTags));
}

                

                

                