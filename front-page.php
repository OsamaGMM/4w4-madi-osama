<?php get_header(); ?>

<section class="liste-articles">
<?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                    $ma_categorie = "4w4";
                    if (in_category('galerie')){
                        $ma_categorie = "galerie";
                    }    
                 get_template_part("template-parts/categorie",$ma_categorie);
             endwhile;
        endif;
    ?>
</section>

<?php get_footer(); ?>