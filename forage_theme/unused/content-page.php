<?php
/**
 * The template used for displaying content for a simple page (without posts) in page.php
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>
 
<!--if you see this, it means this page is referencing content-page.php --> 
					<?php /* ===== Customize this next opening container tag that should SURROUND A SINGLE POST or block of content, keeping in mind there might be several on a page. You might make it an <article>, for example ==== */ ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php /* ===== This next PHP makes the ENTRY TITLE. You can wrap it in any tag(s) you like, possibly with a class of entry-title. ==== */ ?>
							<?php the_title(); ?>


						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. Good idea to add a class of entry-content to it.  ==== */ ?>

 						       <?php the_content(); ?>

						       <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'forage_theme' ), 'after' => '</div>' ) ); ?>

						       <?php edit_post_link( __( 'Edit', 'forage_theme' ), '<span class="edit-link">', '</span>' ); ?>

						<?php /* ===== Replace this PHP to close the container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. ==== */ ?>


					<?php /* ===== be sure to change this next tag to close any container tag(s) you made near top of this file to SURROUND A SINGLE POST or block of content ==== */ ?>
</div>
<!-- #post-<?php the_ID(); ?> -->