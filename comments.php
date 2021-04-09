<?php
/**
 *
 * @package Minera
 */
?>

<?php 
$default_avatar = 'http://zacvineyard.com/blog/wp-content/themes/zac/images/default-avatar.png';
?>
<h2><?php esc_html_e('Comments', 'minera') ?></h2>

<?php if($comments) : ?>  
    <ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  => __( 'Reply', 'minera' ),
					)
				);
			?>
		</ol>
        <?php the_comments_pagination(
			array(
				'mid-size' => 2,
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>'
			)
		); ?>
<?php endif; ?> 

<!-- <hr> -->

<?php if(comments_open()) : ?>

    <?php
        $comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Add Comment', 'minera' ),
        // Change the title of the reply section
        'title_reply' => __( 'Write a Reply or Comment', 'minera' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment" class="comments-form__label">' . _x( 'Comment', 'noun', 'minera' ) . '</label><br /><textarea id="comment" class="comments-form__input" name="comment" aria-required="true"></textarea></p>',
        );
        comment_form( $comments_args );
    ?>
    
<?php else : ?>  

    <p><?php esc_html_e('The comments are closed.', 'minera') ?></p> 

<?php endif; ?>