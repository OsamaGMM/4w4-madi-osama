<?php 
/**
 * Template part pour afficher un blocflex article cours 
*/
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = substr($titre,strpos($titre, '('));
$leTitreSearch =substr($titre,0,7) ;
// strpos($titre, '(') //permet de trouver la position dy caractère ,'('


?> 

<div class="search">  
    <div class="side">
    <h2><a href="<?php the_permalink(); ?>"><?=$titre ?></a></h2>
    <p>Sigle : <?= $sigle ?></p>
    <p>Durée : <?= $duree ?></p>
    <p>Enseignant : <?= the_field('enseignant')?></p>
    <p>Domaine : <?= the_field('domaine')?></p>
    </div>
    <p><?= wp_trim_words(get_the_excerpt(), 60) ?></p>
</div>