<?php

namespace WPDEV;
// Register Custom Post Type
function Meetups_CPT() {

    $labels = array(
        'name'                  => _x( 'Meetups', 'wpdev' ),
        'singular_name'         => _x( 'Meetup',  'wpdev' ),
        'menu_name'             => __( 'Meetups', 'wpdev' ),
        'name_admin_bar'        => __( 'Meetup', 'wpdev' ),
        'archives'              => __( 'Meetup Archives', 'wpdev' ),
        'attributes'            => __( 'Meetup Attributes', 'wpdev' ),
        'parent_item_colon'     => __( 'Parent Meetup:', 'wpdev' ),
        'all_items'             => __( 'All Meetups', 'wpdev' ),
        'add_new_item'          => __( 'Add New Meetup', 'wpdev' ),
        'add_new'               => __( 'Add New', 'wpdev' ),
        'new_item'              => __( 'New Meetup', 'wpdev' ),
        'edit_item'             => __( 'Edit Meetup', 'wpdev' ),
        'update_item'           => __( 'Update Meetup', 'wpdev' ),
        'view_item'             => __( 'View Meetup', 'wpdev' ),
        'view_items'            => __( 'View Meetups', 'wpdev' ),
        'search_items'          => __( 'Search Meetup', 'wpdev' ),
        'not_found'             => __( 'Not found', 'wpdev' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'wpdev' ),
        'featured_image'        => __( 'Featured Image', 'wpdev' ),
        'set_featured_image'    => __( 'Set featured image', 'wpdev' ),
        'remove_featured_image' => __( 'Remove featured image', 'wpdev' ),
        'use_featured_image'    => __( 'Use as featured image', 'wpdev' ),
        'insert_into_item'      => __( 'Insert into Meetup', 'wpdev' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Meetup', 'wpdev' ),
        'items_list'            => __( 'Meetups list', 'wpdev' ),
        'items_list_navigation' => __( 'Meetups list navigation', 'wpdev' ),
        'filter_items_list'     => __( 'Filter meetups list', 'wpdev' ),
    );
    $args = array(
        'label'                 => __( 'Meetup', 'wpdev' ),
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
    register_post_type( 'Meetup', $args );

}
add_action( 'init', 'WPDEV\Meetups_CPT', 0 );