<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Msadiq
 */

?>

	<footer id="colophon" class="site-footer right">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'msadiq' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'msadiq' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'msadiq' ), 'msadiq', '<a href="http://azadlabs.com">Mohammed Sadiq</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div> <!-- End of wrapper -->
</body>
</html>
