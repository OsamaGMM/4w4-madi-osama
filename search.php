<?php

$page = 'pageSearch'

?>
<?php get_header(); ?>
<section class="recherche <?= (is_search() ? 'no-aside' : '') ?>">

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



</section>
<?php get_footer(); ?>