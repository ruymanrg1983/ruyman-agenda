<?php
/*
Template Name: Recibe
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
    <div id="encabezado">
        <p>
            Registro de datos
        </p>
    </div>
<?php
    global $wpzf2plugin;
    $render=$wpzf2plugin->render('/application/formulario/recibe');
    echo $render;

?>




<?php get_footer(); ?>