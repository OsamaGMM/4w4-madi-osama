<!-- <?php

?>
<?php get_header(); ?>
<main>
    <h3>search.php</h3>
    <h3>Rizzulta</h3>
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
<?php get_footer(); ?> -->