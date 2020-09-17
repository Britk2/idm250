<?php

// hook into the init action and call register_taxonomy_for_projects when it fires

add_action('init', 'register_taxonomy_for_projects');

function register_taxonomy_for_projects() {

    $labels = [
        'name'              => _x('Technology', 'taxonomy general name'),
        'singular_name'     => _x('Technology', 'taxonomy singular name'),
        'search_items'      => __('Search Technology'),
        'all_items'         => __('All Technology'),
        'parent_item'       => __('Parent Technology'),
        'parent_item_colon' => __('Parent Technology:'),
        'edit_item'         => __('Edit Technology'),
        'update_item'       => __('Update Technology'),
        'add_new_item'      => __('Add New Technology'),
        'new_item_name'     => __('New Technology Name'),
        'menu_name'         => __('Technology'),
      ];
    
        // Now register the taxonomy
        register_taxonomy('technologies', ['projects'], [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'technologies'],
      ]);

}


add_action('init', 'register_taxonomy_project_type');

function register_taxonomy_project_type() {

    $labels = [
        'name'              => _x('Portfolio Type', 'portfolio general name'),
        'singular_name'     => _x('Portfolio Type', 'portfolio singular name'),
        'search_items'      => __('Search Portfolio Type'),
        'all_items'         => __('All Portfolio Type'),
        'parent_item'       => __('Parent Portfolio Type'),
        'parent_item_colon' => __('Parent Portfolio Type:'),
        'edit_item'         => __('Edit Portfolio Type'),
        'update_item'       => __('Update Portfolio Type'),
        'add_new_item'      => __('Add New Portfolio Type'),
        'new_item_name'     => __('New Portfolio Type Name'),
        'menu_name'         => __('Portfolio Type'),
      ];
    
        // Now register the taxonomy
        register_taxonomy('portfolioTypes', ['projects'], [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'type'],
      ]);

}
