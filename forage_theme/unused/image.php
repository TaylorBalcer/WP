<?php
/**
 * The template for displaying images attached to posts.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>

	<!--if you see this, it means this page is referencing image.php --> 
    

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>

				<?php while ( have_posts() ) : the_post(); /* Start LOOPING through posts/pages, doing this procedure to each: */ ?>
 
					<?php /* ===== Customize this next opening container tag that should SURROUND A SINGLE POST or block of content, keeping in mind there might be several on a page. You might make it an <article>, for example ==== */ ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY HEADER info for a post or block of content. Good idea to add a class of entry-header to it. ==== */ ?>

																<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY TITLE info for a post or block of content. Good idea to add a class of entry-title to it. ==== */ ?>

								<?php the_title(); ?>
 
							<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY TITLE info for a post or block of content. ==== */ ?>

							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY META info for when a post or block of content was posted. Good idea to add a class of entry-meta to it. ==== */ ?>
                            <img class="morph">
                            <?php
                            
                                $metadata = wp_get_attachment_metadata();
                                printf( __( 'Published <span class="entry-date"><time class="entry-date" datetime="%1$s" pubdate>%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%7$s</a>', 'forage_theme' ),
                                    esc_attr( get_the_date( 'c' ) ),
                                    esc_html( get_the_date() ),
                                    wp_get_attachment_url(),
                                    $metadata['width'],
                                    $metadata['height'],
                                    get_permalink( $post->post_parent ),
                                    get_the_title( $post->post_parent )
                                );
                            ?>
                            <?php edit_post_link( __( 'Edit', 'forage_theme' ), '<span class="sep"> | </span> <span class="edit-link">', '</span>' ); ?>

							<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY META info for a post or block of content. ==== */ ?>

							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the IMAGE NAVIGATION (Next/Prev). Good idea to add a class of site-navigation to it. ==== */ ?>
                            
                            	<?php /* ===== This next PHP makes a Previous Image link. You can wrap it in any tag you like, possibly with a class of previous-image. ==== */ ?>
								<?php previous_image_link( false, __( '&larr; Previous', 'forage_theme' ) ); ?>
                            	<?php /* ===== This next PHP makes a Next Image link. You can wrap it in any tag you like, possibly with a class of next-image. ==== */ ?>
								<?php next_image_link( false, __( 'Next &rarr;', 'forage_theme' ) ); ?>

							<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the IMAGE NAVIGATION (Next/Prev). ==== */ ?>

						<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY HEADER info for a post or block of content. ==== */ ?>


					<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY CONTENT info (attaches thumbnails of neighboring images). Good idea to add a class of entry-content to it. ==== */ ?>

						<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTRY ATTACHMENT info (attaches thumbnails of neighboring images). Good idea to add a class of entry-attachment to it. ==== */ ?>
 
							<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ATTACHMENT info (attaches thumbnails of neighboring images). Good idea to add a class of attachment to it. ==== */ ?>
 
                                <?php
                                    /**
                                     * Grab the IDs of all the image attachments in a gallery so we can get the URL of the next adjacent image in a gallery,
                                     * or the first image (if we're looking at the last image in a gallery), or, in a gallery of one, just the link to that image file
                                     */
                                    $attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
                                    foreach ( $attachments as $k => $attachment ) {
                                        if ( $attachment->ID == $post->ID )
                                            break;
                                    }
                                    $k++;
                                    // If there is more than 1 attachment in a gallery
                                    if ( count( $attachments ) > 1 ) {
                                        if ( isset( $attachments[ $k ] ) )
                                            // get the URL of the next image attachment
                                            $next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
                                        else
                                            // or get the URL of the first image attachment
                                            $next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
                                    } else {
                                        // or, if there's only 1 image, get the URL of the image
                                        $next_attachment_url = wp_get_attachment_url();
                                    }
                                ?>
 
                                <a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
                                    $attachment_size = apply_filters( 'forage_theme_attachment_size', array( 1200, 1200 ) ); // Filterable image size.
                                    echo wp_get_attachment_image( $post->ID, $attachment_size );
                                ?></a>

								<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the  ATTACHMENT info ==== */ ?>
                         
                            <?php if ( ! empty( $post->post_excerpt ) ) : /* BEGIN 'display a caption if there is one' */ ?>
 
                            	<?php /* ===== This next little phrase of PHP makes a Caption appear. You can wrap it in any tag you like, possibly with a class of entry-caption. ==== */ ?>                                <?php the_excerpt(); ?>

                            <?php endif;  /* END 'display a caption if there is one' */ ?>
                            
						<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY ATTACHMENT info ==== */ ?>
                         
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'forage_theme' ), 'after' => '</div>' ) ); ?>
 
					<?php /* ===== Replace this PHP to close the HTML container tag(s) that should surround the ENTRY CONTENT info ==== */ ?>
 

					<?php /* ===== POSSIBLE ENTRY META info: If you enable a comments.php page so user can leave comments, or if your posts are categorized or tagged, you may want this next section for the bottom of each post. Of course, you can surround some of these elements with tags for nicer formatting. You may even wish to surround the code from here down with a footer tag ==== */ ?>

                        <?php if ( comments_open() && pings_open() ) : // Comments and trackbacks open ?>
                            <?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'forage_theme' ), get_trackback_url() ); ?>
                        <?php elseif ( ! comments_open() && pings_open() ) : // Only trackbacks open ?>
                            <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'forage_theme' ), get_trackback_url() ); ?>
                        <?php elseif ( comments_open() && ! pings_open() ) : // Only comments open ?>
                            <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'forage_theme' ); ?>
                        <?php elseif ( ! comments_open() && ! pings_open() ) : // Comments and trackbacks closed ?>
                            <?php _e( 'Both comments and trackbacks are currently closed.', 'forage_theme' ); ?>
                        <?php endif; ?>
                        <?php edit_post_link( __( 'Edit', 'forage_theme' ), ' <span class="edit-link">', '</span>' ); ?>

						<?php /* ===== be sure to close any tags surrounding your POSSIBLE ENTRY META info ==== */ ?>

					<?php /* ===== be sure to change this next tag to close any container tag(s) you made near top of this file to SURROUND A SINGLE POST or block of content ==== */ ?>
					</div>
					<!-- #post-<?php the_ID(); ?> -->
 
                <?php comments_template(); ?>
 
				<?php endwhile; /* End of procedure that should be done to each post/page while LOOPING through them. */ ?>

		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>

		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
