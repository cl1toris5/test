<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

</div></div>

	<div class="container-fluid footerBackground">
    <div class="row">
    <div class="col-md-3 col-3">
        <img src="" alt="simple-solutions-footer-logo">
    </div>
    
    <div class="col-md-3 col-3">
        <ul>
            <li><h4>Menu</h4></li>
            <li><a href="/#">o nas</a></li>
            <li><a href="/#">aktualności</a></li>
            <li><a href="/#">kariera</a></li>
            <li><a href="/#">kontakt</a></li>
        </ul>
    </div>

    <div class="col-md-6 col-6">
        <ul>
            <li><h4>Kontakt</h4></li>
            <li>Emilia Waligrucha</li>
            <li><i class="fa fa-phone"></i> 123-456-789</li>
            <li><i class="fa fa-envelope-o"></i> kontakt@simple-solutions.pl</li>

        </ul>
    </div>

    <div class="col-md-12 col-12">
        <p> © All rights reserved | Simple Solutions</p>
    </div>
    </div>
    </div>

</footer><!-- #colophon -->

</div><!-- row end -->    
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

<script>

$(document).ready(function (){
    $("#menu-item-16").click(function (){
        $('html, body').animate({
            scrollTop: $("#about-us-section").offset().top
        }, 800);
    });
});

$(document).ready(function (){
    $("#menu-item-17").click(function (){
        $('html, body').animate({
            scrollTop: $(".our-services").offset().top
        }, 800);
    });
});

$(document).ready(function (){
    $("#menu-item-333").click(function (){
        $('html, body').animate({
            scrollTop: $(".for-client-section").offset().top
        }, 800);
    });
});

$(document).ready(function (){
    $("#menu-item-334").click(function (){
        $('html, body').animate({
            scrollTop: $(".for-cooperation-section").offset().top
        }, 800);
    });
});

$(document).ready(function (){
    $("#menu-item-18").click(function (){
        $('html, body').animate({
            scrollTop: $(".about-section").offset().top
        }, 800);
    });
});


</script>

</html>
