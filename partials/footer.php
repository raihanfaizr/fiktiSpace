
    <!-- jQuery -->
    <script src="<?=$dir?>js/jquery.min.js"></script>
    <script src="<?=$dir?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?=$dir?>js/jquery.isotope.min.js"></script>
    <script src="<?=$dir?>js/owl.carousel.min.js"></script>
    <script src="<?=$dir?>js/easypiechart.min.js"></script>
    <script src="<?=$dir?>js/jquery.countdown.min.js"></script>
    <script src="<?=$dir?>js/scripts.js"></script>
    <script src="<?=$dir?>js/header-mobile.js"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="<?=$dir?>plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="<?=$dir?>plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="<?=$dir?>plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="<?=$dir?>js/rev-script-2.js"></script>
    <script src="<?=$dir?>js/royal_preloader.min.js"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : 'images/fspace-logo.png',
                logo_size      : [160, 160],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script> 

    <!-- AOS LIBRARY -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    

</body>
</html>