
<?php get_header(); ?>

<section class="intro">

<!-- exemple de front-page -->

    <div class="intro-img-container">
        <img src="wp-content/uploads/2023/03/test.jpg" alt="">
    </div>

    <div class="intro-text">
        <p class="text">Bienvenue<br> sur le site<br> du TIM  </p>
        <button>Visiter</button>
    </div>


</section>

<section class="liste-articles">
<?php

        if (have_posts()): 
            while (have_posts()) : the_post(); 
                    $ma_categorie = "4w4";
                    if (in_category('galerie')){
                        $ma_categorie = "galerie";  
                    }    
                 get_template_part("template-parts/categorie", $ma_categorie);
      
             endwhile;
        endif;    

    ?>
</section>

<?php get_footer(); ?>