<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>

	<!--if you see this, it means this page is referencing search.php --> 
		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>

			<?php if ( have_posts() ) : /* Says "begin this procedure if there are any posts/pages:" */ ?>
 
 				<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the HEADER area of the page, possibly with a class of page-header. ==== */ ?>

					<?php /* ===== This next chunk of PHP creates the PAGE TITLE of the page. Surround it with any HTML container tag(s) you wish, possibly with a class of page-title. ==== */ ?>
					<?php printf( __( 'Search Results for: %s', 'forage_theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

	<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the HEADER area of the page. ==== */ ?>
 
				<?php /* ===== UPPER PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-above' ); This brings in the code from inc/template-tags.php. You can edit its html in the content_nav function there. ==== */ ?>
 
                <?php while ( have_posts() ) : the_post(); /* START a Loop: here's what to do to each post... */ ?>
 
                    <?php get_template_part( 'content', 'search' ); /* bring in code from content-search.php, but if there isn't one (which there isn't-- you can make one if you want), use content.php instead. */ ?>
 
                <?php endwhile;  /* END the Loop */  ?>
 
				<?php /* ===== LOWER PAGING NAVIGATION? May wish to put PHP here that says forage_theme_content_nav( 'nav-belowe' ); This brings in the code from inc/template-tags.php. You can edit its html in the content_nav function there. ==== */ ?>
 
            <?php else : /* otherwise no search results were found... */ ?>
 
                <?php get_template_part( 'no-results', 'search' );  /* so show instead what's in the no-results.php page, if there is one... */ ?>
 
            <?php endif; ?>
 
		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>
    
		<?php get_sidebar(); /* this brings in the code from sidebar.php. You can edit its html. */ ?>

		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
