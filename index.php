<?php get_header() ?>

<?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li>
                <?php the_post_thumbnail() ?>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                <p><?php the_content() ?></p>
            </li>
        <?php endwhile ?>
    </ul>
    <?php paginate_links(); ?>
<?php else : ?>
    <h1>Auncun article</h1>
<?php endif; ?>

<?php get_footer() ?>