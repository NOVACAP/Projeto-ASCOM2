<?php 

function logo()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');   
}
add_action('after_setup_theme','logo');




function banner_custom(){
    register_post_type(
        'banners',
        array(
            'labels' => array('name' => 'Banner'),
            'public' => true,
            'menu_position' => 0,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init' , 'banner_custom');


function aviso(){
    register_post_type(
        'aviso',
        array(
            'labels' => array('name' => 'Aviso'),
            'public' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init' , 'aviso');



function banner_post_type(){

    $labels = array(
        'name' => _x( 'Banner', 'Post Type General Name', 'roots'),
        'singular_name' => _x('Banner', 'Post Type Singular Name', 'roots'),
        'menu_name' => __('Banners', 'roots'),
        'parent_item_colon' => __('Parent Banner:', 'roots'),
        'all_items' => __('All Banners', 'roots'),
        'view_item' => __('View Banner', 'roots'),
        'add_new_item' => __('Add New Banner', 'roots'),
        'add_new' => __('Add Banner', 'roots'),
        'edit_item' => __('Edit Banner', 'roots'),
        'update_item' => __('Update Banner', 'roots'),
        'search_items' => __('Search Banner', 'roots'),
        'not_found' => __('Not found', 'roots'),
        'not_found_in_trash' => __('Not found in trash', 'roots'),
    
    );

    $args = array(
        'label' => __('banner', 'roots'),
        'description' => __('Products description', 'roots'),
        'labels' => $labels,
        'supports' => array('title','editor', 'thumbnail',),
        'menu_icon' => get_stylesheet_directory_uri() . 'caminho a ser seguido',
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicity_queryable' => true,
        'rewrite' => false,
        'capability_type' => 'post',
    );

    register_post_type('banner', $args);
}

add_action('init','banner_post_type', 0);