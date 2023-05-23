<aside class="site__aside-atelier">

    <?php  
    the_post_thumbnail(array(150, 150));
    ?>
    <h3>Nos Ateliers 2023</h3>
    <?php 
        wp_nav_menu(array(
            "menu" => 'atelier',
            "container" => "nav"  
        )); 
    ?>
</aside>