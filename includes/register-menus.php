<?php 

if ( ! function_exists( 'htag90_register_menus' ) ) {
    
    function htag90_register_menus(){
        register_nav_menus( 
            [
            'primary_menu' => __( 'Primary Menu', 'htag90' ),
            'footer_menu'  => __( 'Footer Menu', 'htag90' ),
            ]
        );
    }

    add_action( 'after_setup_theme', 'htag90_register_menus', 0 );
}