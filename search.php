<?php get_header(); ?>

<main class="recherche">

    <h1>Resultat de la recherche</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $category = '4w4';
            (in_category('cours') ? $category = 'cours' : '');
            get_template_part('template-parts/search', $category);
    ?>
    <?php endwhile;
    endif;
    ?>



</main>
<?php get_footer(); ?>