<?php 
/**
 * Template for single Page.
 *
 * @package Minera
 */
?>

<?php get_header( ); ?>

    <?php the_title( '<h2 class="page__title">','</h2>' ); ?>

    <div id="content" class="container wrapper">

        <main class="main">

            <?php if( have_posts() ) {

                echo '<div class="article-wrapper">';

                while( have_posts(  )) {

                    the_post();

                    get_template_part( 'template-parts/content/content', 'page' );

                }

                echo '</div>';

                //minera_pagination();

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