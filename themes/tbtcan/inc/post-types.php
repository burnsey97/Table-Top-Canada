<?php
/**
 * Functions which enhance the theme by creating custom post types
 *
 * @package Table_Top_Canada
 */

function tbtcan_post_types() {
    $labels = array(
        'name'                  => _x( 'CardGames', 'Post type general name', 'tbtcan' ),
        'singular_name'         => _x( 'CardGame', 'Post type singular name', 'tbtcan' ),
        'menu_name'             => _x( 'CardGames Blog', 'Admin Menu text', 'tbtcan' ),
        'name_admin_bar'        => _x( 'CardGame', 'Add New on Toolbar', 'tbtcan' ),
        'add_new'               => __( 'Add New', 'tbtcan' ),
        'add_new_item'          => __( 'Add Card Game Post', 'tbtcan' ),
        'new_item'              => __( 'New Card Game Post', 'tbtcan' ),
        'edit_item'             => __( 'Edit Card Game Post', 'tbtcan' ),
        'view_item'             => __( 'View Card Game Post', 'tbtcan' ),
        'all_items'             => __( 'All Card Game Posts', 'tbtcan' ),
        'search_items'          => __( 'Search Card Game Posts', 'tbtcan' ),
        'parent_item_colon'     => __( 'Parent Card Game Posts:', 'tbtcan' ),
        'not_found'             => __( 'No Card Game Posts found.', 'tbtcan' ),
        'not_found_in_trash'    => __( 'No Card Game Posts found in Trash.', 'tbtcan' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'tbtcan' ),
        'insert_into_item'      => _x( 'Insert into Card Game Post', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'tbtcan' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Card Game Post', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'tbtcan' ),
        'filter_items_list'     => _x( 'Filter Card Game Posts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'tbtcan' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'tbtcan' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'tbtcan' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Card Game custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'card_games' ),
        'capability_type'    => 'post',
        'has_archive'        => 'card_games', 
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'tbtcan_card_games', $args );
}
add_action( 'init', 'tbtcan_post_types' );