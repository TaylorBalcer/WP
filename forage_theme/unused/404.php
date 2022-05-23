<?php
/**
 * The template for displaying 404 pages (when a page is Not Found).
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
 
get_header(); /* this brings in the code from header.php, You can edit its html. Note that header.php opens tags that surround this code, such as <body> and <main> */ 
?>
 
 	<?php /* ===== Customize this next opening container tag that should SURROUND THE 404 INFORMATION. You might add other tags surrounding it, if you wish ==== */ ?>
			<div id="post-0" class="post error404 not-found">
 
                 	<?php /* ===== This next chunk of PHP represents the HEADER. Add tags surrounding it, to help format it ==== */ ?>
					<?php _e( 'Oops! That page can&rsquo;t be found.', 'forage_theme' ); ?>
 
		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the ENTRY CONTENT ==== */ ?>

                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'forage_theme' ); ?></p>
 
                    <?php get_search_form(); ?>
 
                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
 
					<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the CATEGORY LIST WIDGET ==== */ ?>
 
                         <?php /* ===== This next chunk of PHP represents the WIDGET TITLE. Add tags surrounding it, to help format it ==== */ ?>
						 <?php _e( 'Most Used Categories', 'forage_theme' ); ?>
                         
                        <ul>
                        <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                        </ul>

					<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the CATEGORY LIST WIDGET ==== */ ?>
 
                    <?php
                    /* translators: %1$s: smilie */
                    $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'forage_theme' ), convert_smilies( ':)' ) ) . '</p>';
                    the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                    ?>
 
                    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
 
		<?php /* ===== Replace this PHP with any closing HTML container tag(s) that should surround the ENTRY CONTENT ==== */ ?>

 	<?php /* ===== Here close any container tag(s) that SURROUND THE 404 INFORMATION. ==== */ ?></div>
 
<?php get_footer(); /* this brings in the code from footer.php. You can edit its html. Note that footer.php closes tags that surround this code, such as <body> and <main> */ ?>
