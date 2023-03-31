<?php
$titre = get_the_title();
if (substr($titre, 0, 1) == '0') {
    $titre = substr($titre, 1);
}


?>
<div class="search">
    <div class="side">
    <h1><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h1>
    </div>
    <p><?= wp_trim_words(get_the_excerpt(), 60) ?></p>
</div>