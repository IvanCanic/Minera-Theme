<?php 
/**
 * Template for 404.php Page not found.
 *
 * @package Minera
 */
?>

<?php get_header( ); ?>

    
    <h2 class="page__title">
        <?php esc_html_e('OOPS! That page can\'t be found.', 'minera'); ?>
    </h2>

    <div class="container wrapper">

        <main class="main">

           
        <?php  get_template_part( 'template-parts/content/content', 'none' ); ?>


        </main>

        <aside class="minera-sidebar">
            <?php get_sidebar(); ?>
        </aside>

    </div>

<?php get_footer( ); ?>