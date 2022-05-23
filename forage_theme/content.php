<?php
/**
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>

<!--if you see this, it means this page is referencing content.php -->
					<?php /* ===== Customize this next opening container tag that should SURROUND A SINGLE POST or block of content, keeping in mind there might be several on a page. You might make it an <article>, for example ==== */ ?>
					
					<div class="container">
        <div class="main-column">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the PAGE TITLE or ENTRY TITLE info for a post or block of content. Good idea to add a class of entry-title to it. Note you can remove the <a> tag around the title, which makes it clickable. ==== */ ?>
<header class="entry-header">
							<?php if ( 'post' === get_post_type() ) {?>
								<h3 class="entry-title">
								<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'forage_theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
									<?php the_title(); ?>
								</a>
							</h3>
							<?php } else { ?>
								<h2 class="page-title">
								<?php the_title(); ?>
							</h2>
							<?php }  ?>

						<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the PAGE TITLE or ENTRY TITLE info for a post or block of content. ==== */ ?>

						<?php if ( 'post' == get_post_type() ) : ?>

							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the META-ENTRY info for a post or block of content, such as "Posted on June 11 by John Doe". Good idea to add a class of entry-meta to it.  ==== */ ?>

								<p class="entry-meta"><?php forage_theme_posted_on(); ?></p>

							<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround META-ENTRY info for a post or block of content. ==== */ ?>

						<?php endif; ?>
						</header>
						
						
							<div class="entry-content">
							
						<?php if ( is_search() ) : /* If user is searching, do this procedure to only displays Excerpts instead of entire post... */ ?>
						
							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the EXCERPT info for a post or block of content. Good idea to add a class of entry-summary to it.  ==== */ ?>

								<?php the_excerpt(); ?>

							<?php /* ===== Replace this PHP to close the container tag(s) that should surround the EXCERPT info for a post or block of content. ==== */ ?>

						<?php else : /* If you set WordPress to display entire post, instead do this procedure: */ ?>
							
							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. Good idea to add a class of entry-content to it.  ==== */ ?>

								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'forage_theme' ) ); ?>

								<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'forage_theme' ), 'after' => '</div>' ) ); ?>

							<?php /* ===== Replace this PHP to close the container tag(s) that should surround the ENTIRE BODY CONTENT of a post or block of content. ==== */ ?>
							
						<?php endif; ?>
						</div>
						<footer class="entry-meta">

						<?php /* ===== POSSIBLE FOOTER META info: If you enable a comments.php page so user can leave comments, or if your posts are categorized or tagged, you may want this next section for the bottom of each post. Of course, you can surround some of these elements with tags for nicer formatting. You may even wish to surround the code from here down with a footer tag ==== */ ?>

							<?php if ( 'post' == get_post_type() ) : /* If it's a page not a post, hide category and tag text on Search: */ ?>

								<?php $categories_list = get_the_category_list( __( ', ', 'forage_theme' ) ); /* translators: used between list items, there is a space after the comma */
								if ( $categories_list && forage_theme_categorized_blog() ) :
								?>

									<?php printf( __( 'Posted in %1$s', 'forage_theme' ), $categories_list ); ?>

								<?php endif; /* End "if categories" procedure */ ?>

								<?php
								$tags_list = get_the_tag_list( '', __( ', ', 'forage_theme' ) );  /* translators: used between list items, there is a space after the comma */
								if ( $tags_list ) :
								?>

									<?php printf( __( 'Tagged %1$s', 'forage_theme' ), $tags_list ); ?>

								<?php endif; /* End "if tags" procedure */ ?>

							<?php endif; /* End "if 'post' == get_post_type()" procedure */ ?>
								</footer>
								
							<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

								<?php comments_popup_link( __( 'Leave a comment', 'forage_theme' ), __( '1 Comment', 'forage_theme' ), __( '% Comments', 'forage_theme' ) ); /* creates a link to leave a comment OR a link to read existing comments */ ?>

                                <?php comments_template();  /* causes comment form right on the page: */ ?>

							<?php endif; ?>

							<?php edit_post_link( __( 'Edit', 'forage_theme' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
						
						<?php /* ===== be sure to close any tags surrounding your POSSIBLE FOOTER META info ==== */ ?>


					<?php /* ===== be sure to change this next tag to close any container tag(s) you made near top of this file to SURROUND A SINGLE POST or block of content ==== */ ?>
								
							
				</article>
				