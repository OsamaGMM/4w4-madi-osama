<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4</title>
    <?php wp_head(); ?>
</head>

<body class="site <?= (is_front_page() ? 'no-aside' : '') ?>">
    <header class="site__header">
        <section class="site__header__logo">
            <div class="logo"><?php the_custom_logo() ?></div>

            <div>
                <input type="checkbox" id="checkbox-menu">
                <?php wp_nav_menu(array(
                    'menu' => 'entete',
                    'container' => 'nav'
                )) ?>
                <?php get_search_form() ?>
                <label class="burger" for="checkbox-menu"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="20" height="20"></label>
            </div>

        </section>

    </header>

    <?php
    if (!is_front_page()) {
        get_template_part("template-parts/aside");
    }
    ?>