<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Gridster
 */
?>

<div id="container">
<div id="sidebar">
<h1 id="blogtitle"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
<p class="tagline"><?php bloginfo( 'description' ); ?></p>

<div class="sidebarwidget">
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</div>

<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


<?php get_search_form(); ?>
    <br>

<h3 class="sidetitle"><?php _e( 'Archives', 'gridster' ); ?></h3>

<ul>
<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
    <br>
</ul>

<h3 class="sidetitle"><?php _e( 'Meta', 'gridster' ); ?></h3>

<?php endif; // end sidebar widget area ?>
    
</div><!-- End Sidebar -->
