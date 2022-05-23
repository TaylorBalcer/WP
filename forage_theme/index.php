<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */

get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */
?>

<!--if you see this, it means this page is referencing index.php -->

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>
		
		<main>
		
			<?php if ( have_posts() ) : /* Says "begin this procedure if there are any posts/pages:" */ ?>
				
				<?php forage_theme_content_nav( 'nav-above' );/* ===== PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-above' ); This brings in the code from inc/template-tags.php. You can edit its html in the content_nav function there. ==== */ ?>

				<?php while ( have_posts() ) : the_post(); /* Start LOOPING through posts/pages, doing this procedure to each: */ ?>
				
					<?php /* Include the Post-Format-specific template for the content. This brings in the code from content.php. You can edit it. */
					get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; /* End of procedure that should be done to each post/page while LOOPING through them. */ ?>

				<?php forage_theme_content_nav( 'nav-below' );/* ===== PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-below' ); This brings in the code from inc/template-tags.php, You can edit its html in the content_nav function there. ==== */ ?>
			</main>
			<?php else : /* what to do if no such posts are found... make a file called no-results.php to customize the feedback */ ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; /* End of procedure to be done if there are any posts/pages. */ ?>
			
			
		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>
			
			
			
	
		<?php get_sidebar(); /* this brings in the code from sidebar.php. You can edit its html. */ ?>
		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
