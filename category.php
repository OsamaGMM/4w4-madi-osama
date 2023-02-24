<?php

?>
<?php get_header(); ?>
<main class="liste-articles">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class='article'>
                <h1> 
                    <a href="<?= get_permalink(); ?>">
                    <!-- Jai seulement deux cat pour l'instant
                    donc je check si cest cours du tim ou note de cours
                    et je gere les caractere a enlever dependament dans quelle page on est
                    : TIM = 7 car; NDC = 3 car -->
                     <?=(is_category('Cours du TIM')) ? substr(wp_trim_words(get_the_title(),10, ""), 7)
                        : substr(wp_trim_words(get_the_title(),10, ""),3)?>
                    </a> 
                </h1>
                <!-- the_content();?> -->
                <?php //the_excerpt(); //affiche un resume de l'article?>
                <p class="excerpt"><?= wp_trim_words(get_the_excerpt(), 25, "icon") ?>...</p>
            </div>
    <?php endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>