<?php get_header() ?>

<div id="slider">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/original-cookie.png" alt="cookie" id="slide">
    <div id="precedent" onclick="ChangeSlide(-1)"><</div>
    <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>



    <div id="dough">
        <h2 id="titre2">QU'EST-CE QUE LA COOKIE DOUGH ?</h2>

        <img id="mini-cookie" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mini-cookie.png" alt="mini-cookie">
        <img id="pates" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pate.png" alt="pate">
        <p id="pate">Pâte à cookie crue <br>
            <strong>100% Made in France</strong>
        </p>



        <p id="text">

            Ce dessert d’origine américaine est une pâte à cookie qui se déguste <br>
            sans cuisson. Un mélange parfait entre la glace et le cookie.<br>
            Frais mais pas glacé, c’est un véritable délice !<br>
            Nos recettes sont réalisées à partir d’une farine adaptée<br>
            à la digestion sans cuisson et nous n’utilisons pas d’œufs.
        </p>

        <img id="boulettes" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Boulettes.png" alt="boulettes">
        <p id="conservation">
            <strong>La conservation de nos recettes</strong> <br> <br>
            La pâte à cookie KOOK’S se conserve au frais (entre 0 et 4°C).<br>
            Pour une dégustation parfaite, nous vous conseillons de sortir<br>
            votre pot de KOOK’S une dizaine de minutes avant de la déguster. <br><br>

            Réussirez-vous à tenir ?
        </p>

        <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br> <br><br> <br>
        <br> <br><br> <br><br> <br><br>
    </div>

    <div class="newsletter">
        <h1>ENVIE DE PARTAGER UN BOUT <br>DE L'AVENTURE AVEC NOUS ?</h1>
        <p>Souscrivez à notre newsletter. Promis, on ne vous embête pas trop !</p>
        <?php echo do_shortcode('[wpforms id="94" title="false"]') ?>
    </div>

    <?php get_footer() ?>