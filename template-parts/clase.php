<?php
        while( have_posts() ) : the_post();
            the_title('<h1 class="text-center text-primary">','</h1>');
            if(has_post_thumbnail()){
                the_post_thumbnail('full',array('class'=>'imagen-destacada'));
            }
?>
            <p class="informacion-clase">
                <?php the_field('diasclases')?> - 
                de <?php the_field('hora_inicio')?> 
                a <?php the_field('hora_fin')?>
            </p>
<?php
            the_content();
        endwhile;
?>