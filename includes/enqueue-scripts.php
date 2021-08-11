<?php 

// Load Stylesheets
function load_stylesheets() {
    // wp_enqueue_style( 'htag90-style', get_stylesheet_uri() );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700,800,900&display=swap');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], '5');

    if(is_single()) {
        wp_enqueue_style( 'highlight', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css', [], '11.2.0');
    }
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



// Load Javascripts
function load_javascripts() {
    wp_enqueue_script( 'htag90-script', 'http://localhost:8080/app.js', [], '1', true );  
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], '5', true );  

    if(is_page('contact')) {
        wp_enqueue_script( 'recaptca', 'https://www.google.com/recaptcha/api.js?render=6LdtFZYbAAAAAMv59hlb0laL1723jrzfO1l0VAAk', [], '3', false);
    }

    if(is_single()) {
        wp_enqueue_script( 'highlight-js', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js', [], '11.2.0', false);
        
    }
}
add_action('wp_enqueue_scripts', 'load_javascripts');

