<?php
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre,-5,5)
// strpos($titre, '(') permet de trouver la position dy caractère ,'('

?>
<?php get_header(); ?>
<main class="single">
    <h1><?= $titre ?></h1>
    <?php if(have_posts()) :
        while (have_posts()) : the_post();
        the_content();?>
        <hr>
    <?php endwhile;
endif;
?>
</main>
<?php get_footer(); ?>