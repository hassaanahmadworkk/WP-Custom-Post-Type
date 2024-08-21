<?php

// Register Developer Projects Post Type
function tf_custom_project_post_type() {
    // Define singular and plural names
    $singular = 'Project';
    $plural = 'Projects';

    $labels = array(
        'name' => _x($plural, 'post type general name'),
        'singular_name' => _x($singular, 'post type singular name'),
        'menu_name' => _x($plural, 'admin menu'),
        'name_admin_bar' => _x($singular, 'add new on admin bar'),
        'add_new' => _x('Add New', $singular),
        'add_new_item' => __('Add New ' . $singular),
        'new_item' => __('New ' . $singular),
        'edit_item' => __('Edit ' . $singular),
        'view_item' => __('View ' . $singular),
        'all_items' => __('All ' . $plural),
        'search_items' => __('Search ' . $plural),
        'parent_item_colon' => __('Parent ' . $plural . ':'),
        'not_found' => __('No ' . $plural . ' found.'),
        'not_found_in_trash' => __('No ' . $plural . ' found in Trash.'),
        'archives' => __($singular . ' Archives'),
        'insert_into_item' => __('Insert into ' . $singular),
        'uploaded_to_this_item' => __('Uploaded to this ' . $singular),
        'filter_items_list' => __('Filter ' . $plural . ' list'),
        'items_list_navigation' => __($plural . ' list navigation'),
        'items_list' => __($plural . ' list'),
        'attributes' => __($singular . ' Attributes'),
        'featured_image' => __('Featured Image'),
        'set_featured_image' => __('Set featured image'),
        'remove_featured_image' => __('Remove featured image'),
        'use_featured_image' => __('Use as featured image'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Custom post type for managing ' . $plural . '.'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => strtolower($singular)),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-portfolio', // You can change this to another Dashicon if needed
        'supports' => array('title', 'editor', 'thumbnail'),   //you can add those also in your supports( excerpt ,comments, revisions,custom-fields)
        'taxonomies' => array('category', 'post_tag'), // You can define custom taxonomies if needed
        'show_in_rest' => true, // Enables Gutenberg editor support
        'rest_base' => strtolower($singular), // REST API base route
        'rest_controller_class' => 'WP_REST_Posts_Controller', // Default REST controller
    );

    register_post_type(strtolower($singular), $args);
}

// Hook into the 'init' action to register the custom post type
add_action('init', 'tf_custom_project_post_type');


?>
