<?php

//Testimonial CPT
add_action( 'init', 'testimonial_post_type', 0 );

function testimonial_post_type() {
// Set UI labels
  $labels = array(
    'name'                => 'Testimonials',
    'singular_name'       => 'Testimonial',
    'menu_name'           => 'Testimonials',
    'parent_item_colon'   => 'Parent Testimonial',
    'all_items'           => 'All Testimonials',
    'view_item'           => 'View Testimonial',
    'add_new_item'        => 'Add New Testimonial',
    'add_new'             => 'Add Testimonial',
    'edit_item'           => 'Edit Testimonial',
    'update_item'         => 'Update Testimonial',
    'search_items'        => 'Search Testimonials',
    'not_found'           => 'No Testimonials Found',
    'not_found_in_trash'  => 'No Testimonials Found in Trash',
  );
  
// Set other options
  $args = array(
    'label'               => 'Testimonials',
    'description'         => 'Testimonials about Justin.',
    'labels'              => $labels,
    'supports'            => array(
        'title',
        'editor',
        'author',
        'page-attributes'
    ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'menu_icon'           => 'dashicons-editor-quote'
  );
  
//Register the CPT
  register_post_type( 'testimonial', $args );
}

//Guided Hunt CPT
add_action( 'init', 'guided_hunt_post_type', 0 );

function guided_hunt_post_type() {
// Set UI labels
  $labels = array(
    'name'                => 'Guided Hunts',
    'singular_name'       => 'Guided Hunt',
    'menu_name'           => 'Guided Hunts',
    'parent_item_colon'   => 'Parent Guided Hunt',
    'all_items'           => 'All Guided Hunts',
    'view_item'           => 'View Guided Hunt',
    'add_new_item'        => 'Add New Guided Hunt',
    'add_new'             => 'Add Guided Hunt',
    'edit_item'           => 'Edit Guided Hunt',
    'update_item'         => 'Update Guided Hunt',
    'search_items'        => 'Search Guided Hunts',
    'not_found'           => 'No Guided Hunts Found',
    'not_found_in_trash'  => 'No Guided Hunts Found in Trash',
  );
  
// Set other options
  $args = array(
    'label'               => 'Guided Hunts',
    'description'         => 'Justin\'s Guided Hunts.',
    'labels'              => $labels,
    'supports'            => array(
        'title',
        'editor',
        'author',
        'page-attributes'
    ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'menu_icon'           => 'dashicons-location-alt'
  );
  
//Register the CPT
  register_post_type( 'guided-hunt', $args );
}

//Create the [-----] Taxonomy
//add_action( 'init', 'create_group_taxonomy' );
function create_group_taxonomy() {
  $labels = array(
    'add_new_item' => 'Add New Group',
    'view_item' => 'View Group',
    'edit_item' => 'Edit Group',
    'update_item' => 'Update Group',
    'parent_item' => 'Parent Group',
    'back_to_items' => '← Back to Groups',

  );
  $args = array(
    'label' => 'Groups',
    'rewrite' => array( 'slug' => 'group' ),
    'labels' => $labels,
    'hierarchical' => true,
    'orderby' => 'term_order'
  );
  register_taxonomy( 'group', array( 'use-case' ), $args );
}


?>