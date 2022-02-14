<?php
/**
 * Functions which enhance the theme by hooking into the block editor
 *
 * @package Table_Top_Canada
 */

//  Created this page and a custom css for blcok editing 

function tbtcan_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'block-editor-script',
        get_template_directory_uri( ) . '/assests/js/block-editor.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory( ) . '/assests/js/block-editor.js')
    );
}
add_action( 'enqueue_block_editor_assets', 'tbtcan_enqueue_block_editor_assets' );



function tbtcan_enqueue_block_assets() {
    wp_enqueue_style( 
        'block-editor-style', 
        get_template_directory_uri( ) . '/assests/css/block-editor.css'
    );
}
add_action( 'enqueue_block_assets', 'tbtcan_enqueue_block_assets' );