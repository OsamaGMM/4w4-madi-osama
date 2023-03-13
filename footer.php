<footer class="site__footer">

<?php
    if (is_front_page()) {
        get_template_part("template-parts/menu-footer");
    }
?>

</footer>
<?php wp_footer(); ?>