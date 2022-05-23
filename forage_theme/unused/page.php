<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>

	<!--if you see this, it means this page is referencing page.php --> 

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>

				<?php while ( have_posts() ) : the_post(); /* Start LOOPING through posts/pages, doing this procedure to each: */ ?>
 
					<?php /* Include the page-specific template for the content. This brings in the code from content-page.php or if none exists, content.php. You can edit it. */
						 get_template_part( 'content', 'page' ); ?>
 
                    <?php comments_template( '', true ); /* lets user leave comments */ ?>
 
				<?php endwhile; /* End of procedure that should be done to each post/page while LOOPING through them. */ ?>

		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>
    
		<?php get_sidebar(); /* this brings in the code from sidebar.php. You can edit its html. */ ?>

		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
