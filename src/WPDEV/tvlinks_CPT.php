<?php

namespace WPDEV;
// Register Custom Post Type
function TVLinks_CPT() {

    $labels = array(
        'name'                  => _x( 'TV-Links', 'wpdev' ),
        'singular_name'         => _x( 'TV-Link',  'wpdev' ),
        'menu_name'             => __( 'TV-Links', 'wpdev' ),
        'name_admin_bar'        => __( 'TV-Link', 'wpdev' ),
        'archives'              => __( 'TV-Link Archives', 'wpdev' ),
        'attributes'            => __( 'TV-Link Attributes', 'wpdev' ),
        'parent_item_colon'     => __( 'Parent TV-Link:', 'wpdev' ),
        'all_items'             => __( 'All TV-Links', 'wpdev' ),
        'add_new_item'          => __( 'Add New TV-Link', 'wpdev' ),
        'add_new'               => __( 'Add New', 'wpdev' ),
        'new_item'              => __( 'New TV-Link', 'wpdev' ),
        'edit_item'             => __( 'Edit TV-Link', 'wpdev' ),
        'update_item'           => __( 'Update TV-Link', 'wpdev' ),
        'view_item'             => __( 'View TV-Link', 'wpdev' ),
        'view_items'            => __( 'View TV-Links', 'wpdev' ),
        'search_items'          => __( 'Search TV-Link', 'wpdev' ),
        'not_found'             => __( 'Not found', 'wpdev' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'wpdev' ),
        'featured_image'        => __( 'Featured Image', 'wpdev' ),
        'set_featured_image'    => __( 'Set featured image', 'wpdev' ),
        'remove_featured_image' => __( 'Remove featured image', 'wpdev' ),
        'use_featured_image'    => __( 'Use as featured image', 'wpdev' ),
        'insert_into_item'      => __( 'Insert into TV-Link', 'wpdev' ),
        'uploaded_to_this_item' => __( 'Uploaded to this TV-Link', 'wpdev' ),
        'items_list'            => __( 'Items list', 'wpdev' ),
        'items_list_navigation' => __( 'Items list navigation', 'wpdev' ),
        'filter_items_list'     => __( 'Filter items list', 'wpdev' ),
    );
    $args = array(
        'label'                 => __( 'TV-Link', 'wpdev' ),
        'description'           => __( 'A list of transactions', 'wpdev' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type( 'TV-Link', $args );

}
add_action( 'init', 'WPDEV\TVLinks_CPT', 0 );