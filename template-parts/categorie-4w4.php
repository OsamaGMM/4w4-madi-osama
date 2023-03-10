<?php
$titre = get_the_title();
if (substr($titre, 0, 1) == '0') {
    $titre = substr($titre, 1);
}
?>
<div class="article">
    <h1><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h1>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</div>