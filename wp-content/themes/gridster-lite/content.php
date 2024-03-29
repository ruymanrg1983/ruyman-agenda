<?php
/**
 * @package Gridster
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class("poste"); ?>>
<a href="<?php the_permalink(); ?>">
<?php if ( has_post_thumbnail() ) {
the_post_thumbnail('post-thumb', array('class' => 'postimg'));
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/img/defaultthumb.png" class="postimg" alt="<?php the_title(); ?>" />
<?php } ?>
</a>

<div class="portfoliooverlay"><a href="<?php the_permalink(); ?>"><span>+</span></a></div>
<h2 class="posttitle"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<p class="postmeta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'gridster' ) );
				if ( $categories_list && gridster_categorized_blog() ) :
			?>
				<?php printf( __( '%1$s', 'gridster' ), $categories_list ); ?>
			<?php endif; // End if categories ?>


		<?php endif; // End if 'post' == get_post_type() ?>
</p>
</div><!-- post -->
