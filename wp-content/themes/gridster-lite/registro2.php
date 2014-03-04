<?php
/*
Template Name: Registro2
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
    <div id="encabezado">
        <p>
            Contacta con nosotros
        </p>
    </div>
<?php

    $render=$wpzf2plugin->render('/application/formulario/contacto');
    echo $render;

?>




<?php get_footer(); ?>