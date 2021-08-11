<?php 
/* Add Multiple sidebar 
*/

/**
 * Add a sidebar.
 */
function register_htag90_sidebars() {

    register_sidebar( 
        [
        'name'          => __( 'Home Sidebar', 'htag90' ),
        'id'            => 'home-sidebar',
        'description'   => __( 'Widgets in this area will be shown on Home page', 'htag90' ),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ] 
    );

    register_sidebar( 
        [
        'name'          => __( 'Blog Sidebar', 'htag90' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets in this area will be shown on Blog', 'htag90' ),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ] 
    );

    register_sidebar( 
        [
        'name'          => __( 'Article Sidebar', 'htag90' ),
        'id'            => 'article-sidebar',
        'description'   => __( 'Widgets in this area will be shown on Articles', 'htag90' ),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ] 
    );
}

add_action( 'widgets_init', 'register_htag90_sidebars' );



