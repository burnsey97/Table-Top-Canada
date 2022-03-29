<?php
/**
 * Functions which enhance the theme by creating custom post types
 *
 * @package Table_Top_Canada
 */

function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Card Games', 'Post type general name', 'tbtcan' ),
        'singular_name'         => _x( 'Card Game', 'Post type singular name', 'tbtcan' ),
        'menu_name'             => _x( 'Card Games Blog', 'Admin Menu text', 'tbtcan' ),
        'name_admin_bar'        => _x( 'Card Game', 'Add New on Toolbar', 'tbtcan' ),
        'add_new'               => __( 'Add New', 'tbtcan' ),
        'add_new_item'          => __( 'Add New recipe', 'tbtcan' ),
        'new_item'              => __( 'New recipe', 'tbtcan' ),
        'edit_item'             => __( 'Edit recipe', 'tbtcan' ),
        'view_item'             => __( 'View recipe', 'tbtcan' ),
        'all_items'             => __( 'All recipes', 'tbtcan' ),
        'search_items'          => __( 'Search recipes', 'tbtcan' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'tbtcan' ),
        'not_found'             => __( 'No recipes found.', 'tbtcan' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'tbtcan' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'tbtcan' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'tbtcan' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'tbtcan' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'tbtcan' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'tbtcan' ),
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
        'rewrite'            => array( 'slug' => 'tbtcan' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'tbtcan_card_games', $args );
}
add_action( 'init', 'tbtcan_post_types' );