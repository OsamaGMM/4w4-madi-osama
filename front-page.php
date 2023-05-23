<?php get_header(); ?>



<section class="liste-articles">
    
<section class="intro">
    <?php
     wp_nav_menu(array(
        "menu" => "atelier",
        "container" => "nav"
    ));

    wp_nav_menu(array(
        "menu" => "bloc-archive",
        "container" => "nav"
    ));
    ?>
</section>


    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $ma_categorie = "4w4";
            if (in_category('galerie')) {
                $ma_categorie = "galerie";
            }else if (in_category('cours')) {
                $ma_categorie = "cours";
            }
            get_template_part("template-parts/categorie", $ma_categorie);
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>