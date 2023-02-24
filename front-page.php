<?php

?>
<?php get_header(); ?>
<main class="liste-articles">
    Front-PAGEGEGEGE
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class='article'>
                <h1> <a href="<?= get_permalink(); ?>"> <?= wp_trim_words( get_the_title(), 2 )?> </a> </h1>
                <!-- the_content();?> -->
                <?php //the_excerpt(); //affiche un resume de l'article?>
                <p class="excerpt"><?= wp_trim_words(get_the_excerpt(), 7, "") ?>...</p>
            </div>
    <?php endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>