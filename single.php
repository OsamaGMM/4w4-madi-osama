<?php

?>
<?php get_header(); ?>
<main class="single">
    <?php if(have_posts()) :
        while (have_posts()) : the_post();
        the_content();?>
        <hr>
    <?php endwhile;
endif;
?>
</main>
<?php get_footer(); ?>