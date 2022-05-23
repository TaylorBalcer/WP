<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>
 

<?php /* ===== Customize this next opening container tag that should SURROUND THE "NO RESULTS FOUND" INFORMATION. You might add other tags surrounding it, if you wish ==== */ ?>
<div id="post-0" class="post no-results not-found">

	<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the HEADER area of the section, possibly with a class of entry-header. ==== */ ?>

		<?php /* ===== This next chunk of PHP creates the TITLE of the section. Surround it with any HTML container tag(s) you wish, possibly with a class of entry-title. ==== */ ?>
        <?php _e( 'Nothing Found', 'forage_theme' ); ?>

	<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the HEADER area of the page. ==== */ ?>
 
	<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the CONTENT of this section. Good idea to add a class of entry-content to it.  ==== */ ?>

        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : /* if this is the homepage and user has the privilege to add posts, give them a link to do so (Maybe they've started a new project and ned a push to start making posts)... */ ?>
 
            <?php /* ===== This next chunk of PHP creates a link to make a post. Surround it with any HTML container tag(s) you wish. ==== */ ?>
			<?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'forage_theme' ), admin_url( 'post-new.php' ) ); ?>
 
        <?php elseif ( is_search() ) : /* if this is NOT the homepage and/or user DOESN'T have the privilege to add posts, but we're here because of a search, give them a 'Sorry' message and a new search form... */ ?>
 
			<?php /* ===== This next chunk of PHP creates a 'Sorry' message. Surround it with any HTML container tag(s) you wish. ==== */ ?>
			<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'forage_theme' ); ?>
              
			<?php get_search_form(); ?>
 
        <?php else : /* if we're seeing this section, but it's not because of a search, give them a different 'Sorry' message and a new search form... */ ?>
 
			<?php /* ===== This next chunk of PHP creates a 'Sorry' message. Surround it with any HTML container tag(s) you wish. ==== */ ?>
			<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'forage_theme' ); ?>
              
            <?php get_search_form(); ?>
 
        <?php endif; ?>

	<?php /* ===== Replace this PHP to close the container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. ==== */ ?>

 	<?php /* ===== Here close any container tag(s) that SURROUND THE "NO RESULTS FOUND" INFORMATION. ==== */ ?></div>