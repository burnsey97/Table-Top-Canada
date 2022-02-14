<?php
/**
 * Functions which enhance the theme by hooking into the block editor
 *
 * @package Table_Top_Canada
 */
function tbtcan_use_block_editor_for_post_type($use_block_editor, $post_type){
    if ('product' === $post_type) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'tbtcan_use_block_editor_for_post_type', 10, 2 );

add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );


// add_action( 'woocommerce_after_add_to_cart_button' );
