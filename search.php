<?php

$page = 'pageSearch'

?>
<?php get_header(); ?>
<main class="recherche">

    search.php


<?php
    $categorie = '4w4';
    $s=get_search_query();
    $args = array(
        's'=>$s
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
        
        <?= get_template_part('template-parts/search', $categorie) ?>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>