<?php

function d4tw_enqueue_files () {
    wp_enqueue_script( 'Match Heights JS', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array('jquery'), '1.0.0', true );

    if ( is_page_template( 'templates/homepage.php') ) {
        wp_enqueue_style( 'Slick CSS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
        wp_enqueue_style( 'Slick Theme CSS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
        wp_enqueue_script( 'Slick JS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.0.0', true );
    }
}

add_action('wp_enqueue_scripts', 'd4tw_enqueue_files');

?>