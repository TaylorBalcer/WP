<?php
/**
 * The template for displaying posts in the Aside post format. It's nearly identical to content.php, minus the title, author name, categories, and tags.
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>
 
<!--if you see this, it means this page is referencing content-aside.php -->
					<?php /* ===== Customize this next opening container tag that should SURROUND A SINGLE POST or block of content, keeping in mind there might be several on a page. You might make it an <article>, for example ==== */ ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY TITLE info for a post or block of content. Good idea to add a class of entry-title to it. Note you can remove the <a> tag around the title, which makes it clickable. ==== */ ?>

							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'forage_theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
							<?php the_title(); ?>
                            </a>

						<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY TITLE info for a post or block of content. ==== */ ?>

    						<?php if ( is_search() ) : // Only display Excerpts for Search, not the entire post ?>

							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the EXCERPT info for a post or block of content. Good idea to add a class of entry-summary to it.  ==== */ ?>

								<?php the_excerpt(); ?>

							<?php /* ===== Replace this PHP to close the container tag(s) that should surround the EXCERPT info for a post or block of content. ==== */ ?>

						<?php else : /* If you set WordPress to only display entire post, instead do this procedure: */ ?>

							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. Good idea to add a class of entry-content to it.  ==== */ ?>

        							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'forage_theme' ) ); ?>

								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'forage_theme' ), 'after' => '</div>' ) ); ?>

							<?php /* ===== Replace this PHP to close the container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. ==== */ ?>

						<?php endif; ?>

						<?php /* ===== POSSIBLE ENTRY META info: If you enable a comments.php page so user can leave comments, or if your posts are categorized or tagged, you may want this next section for the bottom of each post. Of course, you can surround some of these elements with tags for nicer formatting. You may even wish to surround the code from here down with a footer tag ==== */ ?>

        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'forage_theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        	<span class="sep"> | </span>
        	<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'forage_theme' ), __( '1 Comment', 'forage_theme' ), __( '% Comments', 'forage_theme' ) ); ?></span>
        <?php endif; ?>
 
        <?php edit_post_link( __( 'Edit', 'forage_theme' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>

						<?php /* ===== be sure to close any tags surrounding your POSSIBLE ENTRY META info ==== */ ?>

					<?php /* ===== be sure to change this next tag to close any container tag(s) you made near top of this file to SURROUND A SINGLE POST or block of content ==== */ ?>
</div>
<!-- #post-<?php the_ID(); ?> -->