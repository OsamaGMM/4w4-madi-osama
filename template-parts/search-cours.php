<?php 
/**
 * Template part pour afficher un blocflex article cours 
*/
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre,strpos($titre, '('))
// strpos($titre, '(') //permet de trouver la position dy caractère ,'('


?> 

<div class="search">  

    <h2><a href="<?php the_permalink(); ?>"></a></h2>
    <p><?= $sigle ?></p>

    <p><?= the_field('enseignant')?></p>
    <p><?= the_field('domaine')?></p>
    <h2><?= $duree ?></h2>

    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</div>