<?php 
/**
 * Main post content template
 *
 * @package Minera
 */
?>

<article id="post-<?php echo get_the_ID(); ?>" class="<?php echo (is_page()) ? 'article article__single' : 'article'; ?>"> 
    
    <div class="article__content">

        <?php if( ! is_page() ) : ?>

        <ul class="article__categories">
            <?php minera_article_categories(); ?>
        </ul>

        <?php the_title('<h2 class="article__title">', '</h2>'); ?>

        <?php minera_posted_by(); ?>

        <div class="article__loc">
            <?php minera_comments_info(); ?>
        </div>

        <?php endif; ?>
        
        <div class="article__text">
            <?php minera_the_content(); ?>
        </div>

        <?php if( ! is_single() && ! is_page() ) : ?>
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="article__btn"><?php esc_html_e('Read More', 'minera'); ?></a>
        <?php endif; ?>

    </div>

    <?php if( has_post_thumbnail() ) : ?>
    <div 
        class="article__image" 
        style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');
        order:<?php echo (is_sticky() OR is_page()) ? '-1' : ''; ?>;">
    </div>
    <?php endif; ?>

    <?php if( is_sticky()) : ?>
    <div class="sticky-icon"><span class="dashicons dashicons-sticky"></span><?php esc_html_e('Featured', 'minera'); ?></div>
    <?php endif; ?>

</article>