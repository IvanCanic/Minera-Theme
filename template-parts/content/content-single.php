<?php 
/**
 * Single post content template
 *
 * @package Minera
 */
?>

<article id="post-<?php echo get_the_ID(); ?>" class="article article__single">
    
    <?php if( has_post_thumbnail() ) : ?>
    <div 
        class="article__image" 
        style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');
        order:<?php echo (is_sticky()) ? '-1' : ''; ?>;">
    </div>
    <?php endif; ?>

    <div class="article__content">

        <?php the_title('<h2 class="article__title">', '</h2>'); ?>

        <ul class="article__categories">
            <?php minera_article_categories(); ?>
        </ul>

        <div class="article__meta">
            <?php minera_posted_by(); ?>
            <?php minera_posted_at(); ?>
        </div>
        
        <div class="article__text">
            <?php minera_the_content(); ?>
        </div>

        <?php if( ! is_single() ) : ?>
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="article__btn"><?php esc_html_e('Read More', 'minera'); ?></a>
        <?php endif; ?>

    </div>

    <?php if( is_sticky()) : ?>
    <div class="sticky-icon"><span class="dashicons dashicons-sticky"></span><?php esc_html_e('Featured', 'minera'); ?></div>
    <?php endif; ?>

    <?php minera_link_pages(); ?>

    <div class="article__share">
        <div class="article__share-title"><?php esc_html_e('Share this:', 'minera'); ?></div>
        <div class="article__share-social">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><span class="dashicons dashicons-facebook"></span><?php esc_html_e('Facebook', 'minera'); ?></a>
            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=<?php the_permalink() ?>"><span class="dashicons dashicons-twitter"></span><?php esc_html_e('Twitter', 'minera'); ?></a>
        </div>
     </div>

</article>

<div class="single__post">
    <?php $MineraPrevPost = get_previous_post(true); ?>
    <div class="single__post-left">
        <?php if($MineraPrevPost) : ?>
        <?php minera_get_prev_and_next_post($MineraPrevPost->ID); ?>
        <div class="single__post-left-desc"><?php esc_html_e('Previuos Post', 'minera'); ?></div>
        <?php previous_post_link('%link',"  <p class=\"single__post-left-title\">%title</p>", TRUE); ?>
        <?php endif; ?>
    </div>

    <?php $MineraNextPost = get_next_post(true); ?>
    <div class="single__post-right">
        <?php if($MineraNextPost) : ?>
        <?php minera_get_prev_and_next_post($MineraNextPost->ID); ?>
        <div class="single__post-right-desc"><?php esc_html_e('Next Post','minera'); ?></div>
        <?php next_post_link('%link',"  <p class=\"single__post-right-title\">%title</p>", TRUE); ?>
        <?php endif; ?>
    </div>
</div>

<?php if ( comments_open() || get_comments_number() ) : ?>
<div class="main__comments">
    <?php comments_template(); ?>
</div>
<?php endif;?>