<?php 
    /*
    * Template Name: Listado de clases
    */
    get_header();
?>
<main class="contenedor seccion">
    <?php
       get_template_part('template-parts/pagina')
    ?>
    <?php gymfitness_lista_clases(); ?>
</main>
<?php
        get_footer();
?>