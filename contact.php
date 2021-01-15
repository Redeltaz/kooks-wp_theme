<?php
/*
Template Name: Contact
 */
?>

<?php get_header() ?>

<main>

    <div class="topCarte">
        <h1>OÙ NOUS TROUVER</h1>
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/carte.png" class="carte" alt="carte"></div>
    </div>

    <section class="where">
        <p class="paris">Paris</p>
        <div class="adresseContainer">
            <div class="adresseContainerLeft">
                <div class="adresseContent">
                    <h4>4 CASINO</h4>
                    <p>4 Avenue Franklin Delano Roosevelt,</p>
                    <p>75008 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>GALERIES GOURMANDES</h4>
                    <p>Palais des Congrès, 2 place de la Porte Maillot,</p>
                    <p>75017 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>MONOPRIX</h4>
                    <p>117 avenue de Flandre,</p>
                    <p>75019 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>PUBLICIS DRUGSTORE</h4>
                    <p>133 avenue des Champs Élysées,</p>
                    <p>75008 Paris</p>
                </div>
            </div>
            <div class="adresseContainerMid">
                <div class="adresseContent">
                    <h4>U EXPRESS</h4>
                    <p>193 Rue Championnet,</p>
                    <p>75018 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>LES 5 FERMES</h4>
                    <p>33 Avenue Secrétan,</p>
                    <p>75019 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>LE GRAND REX</h4>
                    <p>1 Boulevard Poissonnière,</p>
                    <p>75002 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>BURGERS & FRIES</h4>
                    <p>1 Boulevard de Bonne Nouvelle,</p>
                    <p>75002 Paris</p>
                </div>
            </div>
            <div class="adresseContainerRight">
                <div class="adresseContent">
                    <h4>BREAKFAST IN AMERICA</h4>
                    <p>4 Rue Malher,</p>
                    <p>75004 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>BURGERS & FRIES</h4>
                    <p>5 rue de la Roquette,</p>
                    <p>75011 Paris</p>
                </div>
                <div class="adresseContent">
                    <h4>BURGERS & FRIES</h4>
                    <p>95 boulevard Saint-Germain,</p>
                    <p>75006 Paris</p>
                </div>
            </div>
        </div>
        <p class="paris">Banlieue parisienne</p>
        <div class="adresseContainer">
            <div class="adresseContainerLeft">
                <div class="adresseContent">
                    <h4>SUPER U & DRIVE</h4>
                    <p>5 Place Maurice Berteaux,</p>
                    <p>78400 Chatou</p>
                </div>
                <div class="adresseContent">
                    <h4>MONOPRIX</h4>
                    <p>25 avenue de l’Europe,</p>
                    <p>92310 Sèvres</p>
                </div>
                <div class="adresseContent">
                    <h4>MONOPRIX</h4>
                    <p>117 avenue du Général de Gaulle,</p>
                    <p>94170 Le Perreux-sur-Marne</p>
                </div>
            </div>
            <div class="adresseContainerMid">
                <div class="adresseContent">
                    <h4>SUPER U & DRIVE - LE CHESNAY POTTIER</h4>
                    <p>54 rue Pottier,</p>
                    <p>78150 Le Chesnay-Rocquencourt</p>
                </div>
                <div class="adresseContent">
                    <h4>SO OUEST - LECLERC</h4>
                    <p>38 rue d’Alsace,</p>
                    <p>92300 Levallois-Perret</p>
                </div>
            </div>
            <div class="adresseContainerRight">
                <div class="adresseContent">
                    <h4>U EXPRESS</h4>
                    <p>Rue de Louveciennes,</p>
                    <p>78150 Le Chesnay-Rocquencourt</p>
                </div>
                <div class="adresseContent">
                    <h4>MONOPRIX</h4>
                    <p>Rue de Paris,</p>
                    <p>94340 Joinville-le-Pont</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <h2>FORMULAIRE DE CONTACT</h2>
        <?php echo do_shortcode('[wpforms id="82" title="false"]'); ?>
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cookie.png" class="cookieGros" alt="cookie"></div>
    </section>

</main>

<?php get_footer() ?>