<?php 
/**
 * Template part pour afficher un blocflex article cours 
*/
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre,-5,5)
// strpos($titre, '(') permet de trouver la position dy caractère ,'('
?> 

<div class="article">  
    <h2><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h2>
    <h1><?= $titre_long ?></h1>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h2><?= $duree ?></h2>
</div>