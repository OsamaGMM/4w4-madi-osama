<?php

$page = 'pageSearch'

?>
<?php get_header(); ?>
<main class="recherche <?= (is_search() ? 'no-aside' : '') ?>">

    <h1>Resultat de la recherche</h1>

    <?php if(have_posts()):
        while(have_posts()) : the_post();
        $category = 'cours';
        get_template_part('template-parts/search', $category);
        //the_content();
    ?>
    <?php endwhile;
    endif;
    ?>



</main>
<?php get_footer(); ?>