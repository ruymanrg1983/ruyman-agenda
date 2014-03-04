<?php
/*
Template Name: Mi agenda
*/

get_header(); ?>



<?php get_sidebar(); ?>

<div id="main">
    <div id="encabezado">
        <p>
            Mi agenda
        </p>
    </div>
<?php







$wp_query = new WP_Query('category_name=Agaete&posts_per_page=4,
&paged=' . $paged);
while ($wp_query->have_posts()) : $wp_query->the_post();
    get_template_part( 'content', get_post_format() );
endwhile; ?>

    <?php
$max_page = $wp_query->max_num_pages;
if (!$paged && $max_page >= 1) {
    $current_page = 1;
}
else {
    $current_page = $paged;
} ?>

    <div class="page-nav">
        <div class="page-nav-2">
            <span class="page-index"><?php printf(__('Pagina %1$s de %2$s'), $current_page, $max_page); ?></span>

            <?php echo paginate_links(array(
                "base" => add_query_arg("paged", "%#%"),
                "format" => '',
                "type" => "plain",
                "total" => $max_page,
                "current" => $current_page,
                "show_all" => false,
                "end_size" => 2,
                "mid_size" => 2,
                "prev_next" => true,
                "next_text" => __('Anteriores'),
                "prev_text" => __('Recientes'),
            ));
            ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>



<?php get_footer(); ?>


