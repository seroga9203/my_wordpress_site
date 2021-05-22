<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s %2$s.', 'my_theme' ), 'my_theme', '<a href="https://github.com/seroga9203/my_wordpress_site">Git-hub</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>
