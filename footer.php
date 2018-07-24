<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package freak
 */
?>

	</div><!-- #content -->
	<?php get_sidebar('footer'); ?>
<?php get_template_part('subscription'); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php printf( __( 'Designed By %1$s.', 'freak' ), '<a target="blank" href="'.esc_url("https://inkhive.com/").'" rel="nofollow">InkHive</a>' ); ?>
			<span class="sep"></span>
			<span class="custom-info">
				<?php echo ( esc_html(get_theme_mod('freak_footer_text')) == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','freak') ) : esc_html( get_theme_mod('freak_footer_text') ); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
