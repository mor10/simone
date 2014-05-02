<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'simone_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'my-simone' ) ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'simone' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: Simone by <a href="%1$s" rel="designer nofollow">mor10.com</a>.', 'simone' ), esc_url('http://mor10.com/') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>