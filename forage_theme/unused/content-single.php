<?php
/**
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>

<!--if you see this, it means this page is referencing content-single.php --> 
					<?php /* ===== Customize this next opening container tag that should SURROUND A SINGLE POST or block of content, keeping in mind there might be several on a page. You might make it an <article>, for example ==== */ ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY HEADER info for a post or block of content. Good idea to add a class of entry-header to it. ==== */ ?>

							<?php /* ===== This next PHP makes the ENTRY TITLE. You can wrap it in any tag(s) you like, possibly with a class of entry-title. ==== */ ?>
							<?php the_title(); ?>
 
							<?php /* ===== This next PHP makes the ENTRY META data appear. You can wrap it in any tag(s) you like, possibly with a class of entry-meta. ==== */ ?>
							<?php forage_theme_posted_on(); ?>
 
						<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY HEADER info for a post or block of content. ==== */ ?>
 
						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. Good idea to add a class of entry-content to it.  ==== */ ?>

 						       <?php the_content(); ?>

						       <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'forage_theme' ), 'after' => '</div>' ) ); ?>

						<?php /* ===== Replace this PHP to close the container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. ==== */ ?>


						<?php /* ===== POSSIBLE ENTRY META info: If you enable a comments.php page so user can leave comments, or if your posts are categorized or tagged, you may want this next section for the bottom of each post. Of course, you can surround some of these elements with tags for nicer formatting. You may even wish to surround the code from here down with a footer tag ==== */ ?>

        						<?php $category_list = get_the_category_list( __( ', ', 'forage_theme' ) ); /* translators: used between list items, there is a space after the comma */
 
							$tag_list = get_the_tag_list( '', ', ' ); /* translators: used between list items, there is a space after the comma */
 
            if ( ! forage_theme_categorized_blog() ) {
                // if blog only has 1 category we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'forage_theme' );
                } else {
                    $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'forage_theme' );
                }
 
            } else {
                // But if this blog has loads of categories we should probably display them here
                if ( '' != $tag_list ) {
                    $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'forage_theme' );
                } else {
                    $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'forage_theme' );
                }
 
            } // end check for categories on this blog
 
            printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
            );
        ?>
 
        <?php edit_post_link( __( 'Edit', 'forage_theme' ), '<span class="edit-link">', '</span>' ); ?>

						<?php /* ===== be sure to close any tags surrounding your POSSIBLE ENTRY META info ==== */ ?>

					<?php /* ===== be sure to change this next tag to close any container tag(s) you made near top of this file to SURROUND A SINGLE POST or block of content ==== */ ?>
</div>
<!-- #post-<?php the_ID(); ?> -->