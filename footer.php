    <footer>
        <div class="leftFooter">
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false
            ]) ?>
            <p>© 2020 - K FACTORY SAS. Tous droits réservés.</p>
        </div>
        <div class="line"></div>
        <div class="centerFooter">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoKooksFull.png" class="logoKooksFull" alt="logo Kooks">
        </div>
        <div class="line"></div>
        <div class="rightFooter">
            <p>Nous rejoindre</p>
            <div><a href="https://www.instagram.com/kooks_madeinfrance/?hl=fr"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" class="instagram" alt="instagram"></a></div>
            <div><a href="https://www.facebook.com/KOOKS.eu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" class="facebook" alt="facebook"></a></div>
            <div><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" class="twitter" alt="twitter"></a></div>
        </div>
    </footer>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/navbar.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/navbar.js"></script>
    </body>
</html>