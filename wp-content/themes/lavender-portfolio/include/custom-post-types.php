<?php

/**
 * 
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 * 
 */

function register_project_custom_post_type(){
    $arg = [
        'label'                 => 'Project',
        'labels'                => [
            'name'                  => 'Projects',
            'singular_name'         => 'Project'
        ],
        'supports' => [
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats'
        ],
        // 'taxonomies'            => ['category', 'post_tag'], //means category how wp organized
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_rest'          => true,
        // Dash Icons https://developer.wordpress.org/resource/dashicons/#media-audio
        'menu_icon'             => 'dashicons-art'
        ];

    register_post_type('projects',$arg);
}

add_action('init', 'register_project_custom_post_type');