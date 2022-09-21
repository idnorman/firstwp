<?php
//Comment Template

if(post_password_required( )){
    return;
}

?>

<div id="comments" class="comments-area">
    <?php if(have_comments( )) : ?>
        <h2 class="comments-title">
            <?php 
                $comment_count = get_comments_number();
                if('1' === $comment_count){
                    printf(
                        esc_html__('Comments (1)','firstwp' )
                    );
                }else{
                    printf(
                        esc_html__('Comments ($1$s)','firstwp' ),
                        intval($comment_count)
                    );
                }
            ?>
        </h2>
        <?php the_comments_navigation(); ?>
        <ol class="comment-list">
            <?php
                wp_list_comments([
                    'style' => 'ol',
                    'short_ping' => true
                ] );
            ?>
        </ol>
        <?php 
            the_comments_navigation();
            //if there is no comment, show this
            if(!comments_open()){
                printf(
                    '<p class="no-comments">%1$s</p>',
                    esc_html__('Comments are closed','firstwp' )
                );
            }
        ?>
    <?php endif; 
        //Show Comment Form
        comment_form();
    ?>
</div>