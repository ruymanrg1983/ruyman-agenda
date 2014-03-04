<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Gridster
 */
?>


    
<div id="footer"><?php do_action( 'gridster_credits' ); ?> <?php _e('&copy; Copyright','gridster') ?> <?php the_time('Y') ?> <?php bloginfo('name'); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'gridster' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'gridster' ), 'WordPress' ); ?></a>
<span class="sep"> | </span>
<?php printf( __( 'Theme: %1$s by %2$s.', 'gridster' ), 'Gridster', '<a href="http://themefurnace.com" rel="designer">ThemeFurnace</a>' ); ?></div>
</div><!-- main -->
	
<?php wp_footer(); ?>
</body>
</html>