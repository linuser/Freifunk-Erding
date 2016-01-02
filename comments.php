<?php defined('ABSPATH') or die();
/**
 * Template for displaying Comments.
 *
 * Display comments and comment form. 
 * The display of comments is handled by a callback to bootstrapwp_comment() in the functions.php file.
 * 
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */

if (post_password_required()) {
    return;
} ?>



<div id="input-group" class="form-group">

    <?php if (have_comments()) : ?>

        <ul class="media-list">
            <?php wp_list_comments(array('callback' => 'bootstrapwp_comment')); ?>
        </ul>
    
    

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    
            <nav id="navbar navbar-default p-tb" class="navigation" role="navigation">
    
                <div class="nav navbar-nav small">
                    <?php previous_comments_link( _e('&larr; Older Comments', 'bicbswp')); ?>
                </div>
                
                <div class="nav navbar-nav small">
                    <?php next_comments_link(_e('Newer Comments &rarr;', 'bicbswp')); ?>
                </div>
                
            </nav>
    
        <?php endif;  ?>

    

    <?php elseif (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
    
            <p class="nocomments"><?php _e('Comments are closed.', 'bicbswp'); ?></p>
            
    <?php endif; ?>

    <?php comment_form(); ?>
            
            
</div>