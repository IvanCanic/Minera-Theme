<?php 
/**
 * Template for search page.
 *
 * @package Minera
 */
?>

<?php get_header( ); ?>

    <?php printf('<h2 class="page__title">%1$s "<span class="page__title-query">%2$s</span>"</h2>', esc_html( 'Results for:', 'minera' ), esc_html( get_search_query() )); ?>

    <div class="container wrapper">

        <main class="main">

            <?php if( have_posts() ) {

                echo '<div class="article-wrapper">';

                while( have_posts(  )) {

                    the_post();

                    get_template_part( 'template-parts/content/content', get_post_format() );

                }

                echo '</div>';

                minera_pagination();

            } else {

                get_template_part( 'template-parts/content/content', 'none' );

            } 
            ?>

        </main>

        <aside class="minera-sidebar">
            <?php get_sidebar(); ?>
        </aside>

    </div>

<?php get_footer( ); ?>