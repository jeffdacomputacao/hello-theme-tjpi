<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'hello-parent', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'hello-child', get_stylesheet_uri(), ['hello-parent'] );
});
