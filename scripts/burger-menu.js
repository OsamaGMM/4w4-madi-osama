jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.menu-entete-container ul.menu').slideToggle();
        // jQuery(".menu-entete").animate({right:'100'},100);

 
        e.preventDefault();
    });
    
});
