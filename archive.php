<?php 
/**
 * Archive page for categories, tags and author posts.
 *
 * @package Minera
 */
?>

<?php get_header( ); ?>

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