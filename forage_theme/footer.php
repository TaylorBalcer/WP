<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package forage_theme
* @since forage_theme 1.0
*/
?>
 
<!--if you see this, it means this page is referencing footer.php --> 
</main>
		<?php /* ===== Replace this PHP with tag(s) to close your MAIN container that comes between header and footer. (The tags you opened at the end of header.php) ==== */ ?>

		<?php /* ===== Replace this PHP with opening HTML container tag(s) that should surround the FOOTER, such as <footer>. Note you can remove the <a> tag around the elements if you wish ==== */ ?>
		<footer class="page_footer">
			<p>
		        <?php do_action( 'forage_theme_credits' ); ?>

		        <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'forage_theme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'forage_theme' ), 'WordPress' ); ?></a>

		        <?php printf( __( 'Theme: %1$s by %2$s.', 'forage_theme' ), 'forage_theme', '<a href="http://themeforage_themer.com/" rel="designer">Themeforage_themer</a>' ); ?>
				
				</p>
				</footer>
				
		<?php /* ===== Replace this PHP with tag(s) to close your FOOTER container ==== */ ?>
		</footer>
	<?php /* ===== Replace this PHP with tag(s) to close containers that should surround the ENTIRE document ==== */ ?>
	</body>
				</html>
<?php wp_footer(); /* LEAVE THIS! It creates scripts and the top strip of controls for admin */ ?>
 
</body>
</html>