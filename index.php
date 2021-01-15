<?php get_header() ?>

<main>
    <h1>NOS ACTUALITÉS </h1>
    <?php if (have_posts()) : ?>
        <ul class="articles">
            <?php while (have_posts()) : the_post(); ?>
                <li class="article">
                    <div class="articleText">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <p><?php the_date() ?></p>
                        <p><?php the_content() ?></p>
                    </div>
                    <div class="imgArticle"><?php the_post_thumbnail() ?></div>
                    <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tache.png" class="tache" alt="tache"></div>
                </li>
            <?php endwhile ?>
            <?php the_posts_pagination(); ?>
        </ul>
    <?php else : ?>
        <h1>Aucun article</h1>
    <?php endif; ?>
</main>

<?php get_footer() ?>