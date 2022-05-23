<?php
/**
 * The template for displaying customized search forms in forage_theme. WP works fine without this file.
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
?>
<!--if you see this, it means this page is referencing searchform.php -->
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label for="s" class="assistive-text"><?php _e( 'Search', 'forage_theme' ); ?></label>
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'forage_theme' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'forage_theme' ); ?>" />
    </form>