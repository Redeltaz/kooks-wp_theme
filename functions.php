<?php
add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
});

function kookstheme_title ($title){
    return 'test' . $title;
};

add_filter('wp_title', 'kookstheme_title');