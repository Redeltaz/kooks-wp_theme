<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head() ?>
</head>

<body>
    <nav>
        <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoKooks.png" class="logoKooks" alt="logo Kooks"></div>
        <?php wp_nav_menu([
            'theme_location' => 'header', 
            'container' => false]) ?>
    </nav>