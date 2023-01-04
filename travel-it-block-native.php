<?php
/**
 * Plugin Name:       Travel IT Block
 * Plugin URI:        https://github.com/yttechiepress/travel-it-block-native
 * Description:       A Travel Blog block natively created to use Gutenberg for WordPress
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            laurencebahiirwa
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       travel-it-block-native
 * Domain Path:       /languages/
 * Update URI:         https://github.com/yttechiepress/travel-it-block-native
 *
 * @package           techiepress
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function techiepress_travel_it_block_native_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'techiepress_travel_it_block_native_block_init' );
