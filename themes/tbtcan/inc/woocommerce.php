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


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 6 );
