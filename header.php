<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4</title>
    <?php wp_head(); ?>
</head>

<body>
    
    <header class="site__header">
        <section class="site__header__logo">

            <?php the_custom_logo() ?>
            <?php wp_nav_menu(array(
                'menu' => 'entete',
                'container' => 'nav'
            )) ?>
            <a class="toggle-nav" href='#'>&#9776;</a>
        </section>
        <h1><a href="<?= bloginfo('url') ?>"></a></h1>
        <h2> <?= bloginfo('description') ?></h2>
    </header>