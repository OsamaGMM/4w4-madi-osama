<?php

?>
<?php get_header(); ?>
<main class="liste-articles">

    <?php
    $category = get_queried_object();
    $args = array(
        'category_name' => $category->slug,
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class='article'>
                <h1>
                    <a href="<?= get_permalink(); ?>">
                        <!-- Jai seulement deux cat pour l'instant
                    donc je check si cest cours du tim ou note de cours
                    et je gere les caractere a enlever dependament dans quelle page on est
                    : TIM = 7 car; NDC = 3 car -->
                        <!-- Il faut que je check c quoi les caractere si c un "0" j'enleve -->
                        <?= (is_category('Cours du TIM')) ? substr(wp_trim_words(get_the_title(), 10, ""), 7)
                            : substr(wp_trim_words(get_the_title(), 10, ""), 1) ?>
                        <?php
                        $search = '';
                            function str_replace_json($search, $replace, $subject)
                            {
                                return json_decode(str_replace($search, $replace,  json_encode($subject)));
                            }
                        ?>
                    </a>
                </h1>
                <!-- the_content();?> -->
                <?php //the_excerpt(); //affiche un resume de l'article
                ?>
                <p class="excerpt"><?= wp_trim_words(get_the_excerpt(), 20, "") ?>...</p>
            </div>
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>