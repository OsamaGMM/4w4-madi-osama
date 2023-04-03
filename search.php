<?php get_header(); ?>

<main class="recherche">

    <h1>Resultat de la recherche</h1>

    <?php
    $category = '4w4';

    if (have_posts()) :
        while (have_posts()) : the_post();
            if (in_category('cours')) {
                $category = 'cours';
                get_template_part('template-parts/search', $category);
            } else {
                get_template_part('template-parts/search', $category);
            }
    ?>
    <?php endwhile;
    endif;
    ?>



</main>
<?php get_footer(); ?>