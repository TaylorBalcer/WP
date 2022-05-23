<?php
/**
* The template for displaying Archive pages.
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package forage_theme
* @since forage_theme 1.0
*/
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>

<!--if you see this, it means this page is referencing archive.php --> 
<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the information INSIDE THE MAIN area of the page. ==== */ ?>
 
<?php if ( have_posts() ) : ?>
 
	<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the HEADER area of the page, possibly with a class of page-header. ==== */ ?>

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the PAGE TITLE of the page, possibly with a class of page-title. ==== */ ?>

        <?php
            if ( is_category() ) {
                printf( __( 'Category Archives: %s', 'forage_theme' ), '<span>' . single_cat_title( '', false ) . '</span>' );
 
            } elseif ( is_tag() ) {
                printf( __( 'Tag Archives: %s', 'forage_theme' ), '<span>' . single_tag_title( '', false ) . '</span>' );
 
            } elseif ( is_author() ) {
                /* Queue the first post, that way we know
                 * what author we're dealing with (if that is the case).
                */
                the_post();
                printf( __( 'Author Archives: %s', 'forage_theme' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();
 
            } elseif ( is_day() ) {
                printf( __( 'Daily Archives: %s', 'forage_theme' ), '<span>' . get_the_date() . '</span>' );
 
            } elseif ( is_month() ) {
                printf( __( 'Monthly Archives: %s', 'forage_theme' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
 
            } elseif ( is_year() ) {
                printf( __( 'Yearly Archives: %s', 'forage_theme' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
 
            } else {
                _e( 'Archives', 'forage_theme' );
 
            }
        ?>

		<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the PAGE TITLE of the page. ==== */ ?>

    <?php
        if ( is_category() ) {
            // show an optional category description
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
 
        } elseif ( is_tag() ) {
            // show an optional tag description
            $tag_description = tag_description();
            if ( ! empty( $tag_description ) )
                echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
        }
    ?>

	<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the HEADER area of the page. ==== */ ?>
 
<?php forage_theme_content_nav( 'nav-above' ); ?>
 
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
 
    <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );
    ?>
 
<?php endwhile; ?>
 
<?php forage_theme_content_nav( 'nav-below' ); ?>
 
<?php else : ?>
 
<?php get_template_part( 'no-results', 'archive' ); ?>
 
<?php endif; ?>
 
		<?php /* ===== Replace this PHP to close your container(s) that surround the information INSIDE THE MAIN area of the page. ==== */ ?>
    
		<?php get_sidebar(); /* this brings in the code from sidebar.php. You can edit its html. */ ?>

		<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
