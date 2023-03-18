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
        <li><img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32" height="32"></li>
        <li><a target="_blank" href="https://www.twitch.tv/amouranth"><img src="https://s2.svgbox.net/social.svg?ic=twitch&color=000" width="32" height="32"></a></li>
        <li><a target="_blank" href="https://www.youtube.com/watch?v=xm3YgoEiEDc"> <img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" width="32" height="32"> </a></li>
    </ul>
</nav>
       <?php get_search_form(); ?>

    






</footer>