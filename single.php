<?php get_header() ?>

<main>
    <section class="article">
        <div class="articleLeft">
            <h2><?php the_title() ?></h2>
            <p><?php echo get_the_date() ?></p>
            <p><?php the_content() ?></p>
            <div class="social">
                <div><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitterOrange.png" class="twitter" alt="twitter"></a></div>
                <div><a href="https://www.facebook.com/KOOKS.eu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebookOrange.png" class="facebook" alt="facebook"></a></div>
                <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/import.png" class="import" alt="import"></div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="imgArticle">
            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/articleTopLeft.png" class="cookie1" alt="cookies"></div>
            <?php the_post_thumbnail() ?>
            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/articleBottomRight.png" class="cookie2" alt="cookies"></div>
        </div>
    </section>
    <div class="bigLine"></div>
    <section class="commentaires">
        <div class="comTop">
            <h2>COMMENTAIRE</h2>
            <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/commentaire.png" class="commentaire" alt="commentaire"></div>
        </div>
    </section>

</main>

<?php get_footer() ?>