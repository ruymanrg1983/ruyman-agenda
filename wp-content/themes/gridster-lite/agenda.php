<?php
/*
Template Name: Agenda
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
    <div id="encabezado">
        <p>
            Encuentra todos los eventos de cada municipio
        </p>
    </div>
    <div class="ayuntamientos">
        <?php
        $args = array(
            'orderby' => 'name',
            'hide_empty'  => 0,
            'parent' => 0
        );
        $categories = get_categories( $args );?>
        <li>

        <?php foreach ( $categories as $category ) {
            echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
        }
        ?>
        </li>
    </div>




<?php get_footer(); ?>




