<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4</title>
    <?php wp_head(); ?>
</head>

<body class="site">
    
    <header class="site__header">
        <section class="site__header__logo">
            <div class="logo"><?php the_custom_logo() ?></div>
            <div>
            <?php wp_nav_menu(array(
                'menu' => 'entete',
                'container' => 'nav'
            )) ?>
            <?php get_search_form() ?>
            <a class="toggle-nav" href='#'>&#9776;</a>
            </div>
        </section>

    </header>

    <!-- <aside class="site__aside">
        <h3>MENU ASIDE</h3>
        <?php
            // wp_nav_menu(array(
            //     'menu' => 'aside', on peut avoir un menu qui change d'apres la page dans laquelle on est
            //   *************exemple si on est dans cours on a le menu que pour les cours
            //     'container' => 'nav'
            // ))
        ?>
    </aside> -->