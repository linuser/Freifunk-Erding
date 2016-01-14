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

 if ( post_password_required() )
	return;
?>

	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'Freifunk_Erding' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'Freifunk_Erding' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'Freifunk_Erding' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'Freifunk_Erding' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use Freifunk_Erding_comment() to format the comments.
				 * If you want to override this in a child theme, then you can
				 * define Freifunk_Erding_comment() and that will be used instead.
				 * See Freifunk_Erding_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments( array( 'callback' => 'Freifunk_Erding_comment' ) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'Freifunk_Erding' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'Freifunk_Erding' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'Freifunk_Erding' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Kommentare Geschlossen.', 'Freifunk_Erding' ); ?></p>
	<?php endif; ?>
	
	
	
	<?php 
	//Displaying the Comment Form
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$args = array(
		  'comment_notes_after' => ' ',	
		  'comment_field' =>  '<div class="form-group"><label for="comment">' . _x( 'Kommentar', 'noun','Freifunk_Erding' ) .
		    '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' .
		    '</textarea></div>',		
		  'fields' => apply_filters( 'comment_form_default_fields', array(
		
		    'author' =>
		      '<div class="form-group">' .
		      '<label for="author">' . __( 'Name', 'Freifunk_Erding' ) . '</label> ' .
		      ( $req ? '<span class="required">*</span>' : '' ) .
		      '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		      '" size="30"' . $aria_req . ' /></div>',
		
		    'email' =>
		      '<div class="form-group"><label for="email">' . __( 'Email', 'Freifunk_Erding' ) . '</label> ' .
		      ( $req ? '<span class="required">*</span>' : '' ) .
		      '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		      '" size="30"' . $aria_req . ' /></div>',
		
		
		    )
		  ),
		);
	
	
	comment_form($args); ?>

</div><!-- #comments -->
