<?php
/**
* The Sidebar-- the part of a theme that contains widgets.
* Our theme is going to have two widget areas. That way
* we can re-use this code for 2-column or 3-column themes
* (on a 2-column theme the sidebars are stacked, one on top of the other).
*
* @package forage_theme
* @since forage_theme 1.0
*/
?>
<!--if you see this, it means this page is referencing sidebar.php -->

		<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround all the SIDEBAR blocks as a GROUP. The tags that appear around each sidebar block, can be found and modified in the widgets_init function of functions.php ==== */ ?>
		<aside class="widget-area">
		<section id="search-2" class="widget widget_search">
          
			 
			<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the FIRST SIDEBAR's info. ==== */ ?>
		
				
				<?php do_action( 'before_sidebar' ); ?>

				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

					<?php /* ===== Leave the if structure around this, but if the admin has not dragged any widgets inside "Primary Widget Area" in their Dashboard, you can use this area to hard-code some default widgets. For example, use get_search_form() to create the Search slot, and/or use wp_get_archives( array( 'type' => 'monthly' ) ) to create a list of Archives. Other useful Meta Widget links include wp_register() wp_loginout() and wp_meta()  ==== */ ?>

				<?php endif; // end sidebar widget area ?>

			<?php /* ===== Replace this PHP to close any HTML container tag(s) that should surround the FIRST SIDEBAR's info. ==== */ ?>
			
				</section>
       

			<section id="recent-posts-2" class="widget widget_recent_entries">
			<h3></h3>
        	<ul>
			<?php /* ===== Replace this PHP with any opening HTML container tag(s) that should surround the SECOND SIDEBAR's info. ==== */ ?>

				<?php dynamic_sidebar( 'sidebar-2' ); ?>

			<?php /* ===== Replace this PHP to close any HTML container tag(s) that should surround the SECOND SIDEBAR's info. ==== */ ?>
			
		<?php /* ===== Replace this PHP to close any HTML container tag(s) that should surround all the SIDEBAR blocks as a GROUP ==== */ ?>
		</ul>
      </section>
        </aside>
    