<?php

?>
<?php get_header(); ?>
<main>

    <?php if(have_posts()) :
        while (have_posts()) : the_post();
        the_title('<h1> </h1>');
        //the_content();
        wp_trim_words(the_excerpt(), 50)
        ?>
        
        <hr>
    <?php endwhile;
endif;
?>
</main>
<?php get_footer(); ?>