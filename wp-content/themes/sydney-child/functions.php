<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer instellingen',
        'menu_slug'     => 'theme-general-settings',
    ));
    
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// Hide the basic Wordpress editor
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
	remove_post_type_support( 'page', 'editor' );
}

// Change the background color of the inputs (only images) from ACF in the backend 
function my_acf_admin_head() {
    ?>
    <style type="text/css">

    .acf-image-uploader .image-wrap img {
        background: #d7d7d7 !important;
    }

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

?>