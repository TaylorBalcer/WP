<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to forage_theme_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>
 
<?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() )
        return;
?>

	<!--if you see this, it means this page is referencing comments.php -->  
	<?php /* ===== Customize this next opening container tag that should SURROUND THE COMMENTS AREA ==== */ ?>
 
    <?php // You can start editing here -- including this comment! ?>
 
    <?php if ( have_comments() ) : ?>

		<?php /* ===== This next chunk of PHP makes the Comment's title appear. You can wrap it in any tag you like, possibly with a class of comments-title. ==== */ ?>
            <?php
                printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'forage_theme' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>

 
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>

			<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the UPPER COMMENT NAVIGATION (Next/Prev). Good idea to add a class of comment-navigation to it. ==== */ ?>
>
				<?php /* ===== This next PHP makes an Assistive Text Header. You can wrap it in any tag you like, possibly with a class of assistive-text. ==== */ ?>
				<?php _e( 'Comment navigation', 'forage_theme' ); ?>

				<?php /* ===== This next PHP makes a Previous Comment link. You can wrap it in any tag you like, possibly with a class of nav-previous. ==== */ ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'forage_theme' ) ); ?>

				<?php /* ===== This next PHP makes a Next Comment link. You can wrap it in any tag you like, possibly with a class of nav-next. ==== */ ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'forage_theme' ) ); ?>

			<?php /* ===== be sure to replace this with HTML tags to close any container tag(s) you made around the UPPER COMMENT NAVIGATION (Next/Prev) ==== */ ?>

        <?php endif; // check for comment navigation ?>
 
		<?php /* ===== This next Ordered List will surround a list of comments. May wish to add a class of commentlist to it. ==== */ ?>
        <ol>
            <?php
                /* Loop through and list the comments as <li>s. Tell wp_list_comments()
                 * to use forage_theme_comment() to format the comments.
                 * If you want to overload this in a child theme then you can
                 * define forage_theme_comment() and that will be used instead.
                 * See forage_theme_comment() in inc/template-tags.php for more.
                 */
                wp_list_comments( array( 'callback' => 'forage_theme_comment' ) );
            ?>
        </ol>
 

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through? If so, show navigation ?>

			<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the LOWER COMMENT NAVIGATION (Next/Prev). Good idea to add a class of comment-navigation to it. ==== */ ?>
>
				<?php /* ===== This next PHP makes an Assistive Text Header. You can wrap it in any tag you like, possibly with a class of assistive-text. ==== */ ?>
				<?php _e( 'Comment navigation', 'forage_theme' ); ?>

				<?php /* ===== This next PHP makes a Previous Comment link. You can wrap it in any tag you like, possibly with a class of nav-previous. ==== */ ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'forage_theme' ) ); ?>

				<?php /* ===== This next PHP makes a Next Comment link. You can wrap it in any tag you like, possibly with a class of nav-next. ==== */ ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'forage_theme' ) ); ?>

			<?php /* ===== be sure to replace this with HTML tags to close any container tag(s) you made around the UPPER COMMENT NAVIGATION (Next/Prev) ==== */ ?>

        <?php endif; // check for comment navigation ?>
 
    <?php endif; // closes IF 'have_comments()' above ?>
 
 
    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
    
        <?php /* ===== You can wrap this next chunk of PHP in any tag you like, to help you fomat its "Comments are closed" message==== */ ?><?php _e( 'Comments are closed.', 'forage_theme' ); ?></p>
        
    <?php endif; ?>
 
    <?php comment_form(); /* If you would like to change elements in the comment form, you can do so by passing different parameters to the comment_form() function. See http://codex.wordpress.org/Function_Reference/comment_form */ ?>
 
	<?php /* ===== be sure to replace this with HTML tags to close any container tag(s) you made near top of this file to SURROUND THE COMMENTS AREA ==== */ ?>