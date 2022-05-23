<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and the first part of BODY, to where  your page's "MAIN" tag opens
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php
    /* String together the <title> tag based on what the page will show: */
    global $page, $paged;
    wp_title( '|', true, 'right' );
    // Add the blog name:
    bloginfo( 'name' );
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'forage_theme' ), max( $paged, $page ) );
  ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php /* ===== add any other head connections necessary to make your style look right... fonts, etc... ==== */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Lobster+Two&family=Yanone+Kaffeesatz:wght@300&family=Zen+Kurenaido&display=swap" rel="stylesheet">
  <?php wp_head(); /* This is a required hook. WordPress plugins and other cool things rely on it. */ ?>
</head>

<body <?php body_class(); /* The body_class() function adds a bunch of useful CSS classes to the body tag that come in handy when we want to style the theme based on a variety of conditions. 'View source' in a browser to see them.  */ ?>>

<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the ENTIRE document. Good idea to add a class of hfeed to it. ==== */ ?>

	<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the MASTHEAD, such as <header> ==== */ ?>
  <header id="masthead" class="site-header">
    

		<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the SITE TITLE, such as <h1>. Note you can remove the <a> tag around the site title, which makes it clickable. ==== */ ?>
    <h1 class ="site-title">
			


        <?php bloginfo( 'name' ); ?>
      

		<?php /* ===== Replace this PHP with tag(s) to close your SITE TITLE container ==== */ ?>
  

		<p class="site-description"><?php bloginfo( 'description' ); /* ===== DESCRIPTION? May wish to put PHP here that says bloginfo( 'description' ); surrounded by subheader HTML tag(s) ==== */ ?>
    </p>

		<?php /* ===== This next PHP makes the MAIN NAVIGATION. You can wrap it in any tag(s) you like, such as <nav>. ==== */ ?>
              <nav id="main-navigation">
              <div class="menu-main-menu-container">
              <ul class ="main-menu">
              <nav class="nav nav--main-nav">
			<label for="nav-toggle" class="nav__toggle-label"> Menu</label>
			<input type="checkbox" id="nav-toggle" class="nav__toggle">
			<ol class="nav__list"> 
                <li>
    <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
    </li>
    </ol>
        </ul>
        </div>   
        </nav>
        </header>
		<?php /* ===== Replace this PHP with tag(s) to close your MASTHEAD container. Or you can close it earlier, above the navigation. ==== */ ?>



	<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the MAIN part between header and footer ==== */ ?>
