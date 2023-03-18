<footer class="site__footer">
    <section>

            <div class="logo"><?php the_custom_logo() ?></div>
        </section>


    <?php
    if (is_front_page()) {
        wp_nav_menu(array(
            'menu' => 'footer',
            'container' => 'nav'
        ));


    }    ?>

<nav class="menu-footer-container">
    <ul class="menu1">
        <li><a title="Github de Osama" target="_blank" href="https://github.com/OsamaGMM"><img src="https://s2.svgbox.net/social.svg?ic=github&color=000" width="32" height="32"></a></li>
        <li><a title="Site de mon collègue" target="_blank" href="https://cidweb27.sg-host.com/"><img src="https://s2.svgbox.net/materialui.svg?ic=group&color=000" width="32" height="32"></a></li>
        <li><a title="Essaie moi" target="_blank" href="https://www.youtube.com/watch?v=xm3YgoEiEDc"> <img src="https://s2.svgbox.net/hero-solid.svg?ic=question-mark-circle&color=000" width="32" height="32"> </a></li>
    </ul>
</nav>
       <?php get_search_form(); ?>

    






</footer>