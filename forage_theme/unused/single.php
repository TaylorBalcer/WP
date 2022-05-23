<?php
/**
 * The Template for displaying all single posts.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>
 	<!--if you see this, it means this page is referencing single.php -->

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>

				<?php while ( have_posts() ) : the_post(); /* Start LOOPING through posts/pages, doing this procedure to each: */ ?>
 
				<?php /* ===== PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-above' ); This brings in the code from inc/template-tags.php. You can edit its html in the content_nav function there. ==== */ ?>
 
					<?php /* Include the single-specific template for the content. This brings in the code from content-single.php or if none exists, content.php. You can edit it. */
						get_template_part( 'content', 'single' );  ?>
 
				<?php /* ===== PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-below' ); This brings in the code from inc/template-tags.php. You can edit its html in the content_nav function there. ==== */ ?> 

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template( '', true );
                ?>
 
				<?php endwhile; /* End of procedure that should be done to each post/page while LOOPING through them. */ ?>

		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>
    
		<?php get_sidebar(); /* this brings in the code from sidebar.php. You can edit its html. */ ?>

		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
