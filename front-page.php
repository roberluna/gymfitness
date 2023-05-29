<?php 
    get_header();
?>

<section class="bienvenida seccion contenedor text-center">
    <h2 class="text-primary">
        <?php the_field('encabezado_bienvenida'); ?>
    </h2>
    <p>
        <?php the_field('texto_bienvenida'); ?>
    </p>
</section>

<section class="areas">
    <div class="area">
        <img src="<?php echo get_field('area_1')["imagen"]["sizes"]["medium_large"];?>" alt="<?php echo get_field('area_1')["texto"]?>">
        <p><?php echo get_field('area_1')["texto"]?></p>
    </div>
    <div class="area">
        <img src="<?php echo get_field('area_2')["imagen"]["sizes"]["medium_large"];?>" alt="<?php echo get_field('area_2')["texto"]?>">
        <p><?php echo get_field('area_2')["texto"]?></p>
    </div>
    <div class="area">
        <img src="<?php echo get_field('area_3')["imagen"]["sizes"]["medium_large"];?>" alt="<?php echo get_field('area_3')["texto"]?>">
        <p><?php echo get_field('area_3')["texto"]?></p>
    </div>
    <div class="area">
        <img src="<?php echo get_field('area_4')["imagen"]["sizes"]["medium_large"];?>" alt="<?php echo get_field('area_4')["texto"]?>">
        <p><?php echo get_field('area_4')["texto"]?></p>
    </div>
</section>
<main class="contenedor seccion">
    <h2 class="text-center text-primary">Nuestras clases</h2>
     <?php gymfitness_lista_clases(4); ?>
     <div class="contenedor-boton">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Nuestras clases'))); ?>"
            class="boton boton-primario"
        >
            Ver todas las clases
        </a>
     </div>
    
</main>

<section class="contenedor seccion">
    <h2 class="text-center text-primary">Nuestro blog</h2>
    <p class="text-center">Aprende tips de nustros instructores expertos</p>
    <ul class="listado-grid">
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4
            );
            $blog = new WP_Query($args);
            while($blog->have_posts()){
                $blog->the_post();
                get_template_part('template-parts/blog');
            }
            wp_reset_postdata();
        ?>
    </ul>
</section>

<?php
    get_footer();
?>
