<?php
/**
 * WW Suit functions and definitions
 *
 * @package WW Suit
 */

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'wwsuit_register_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @return void
	 */
	function wwsuit_register_pattern_categories() {
		register_block_pattern_category(
			'wwsuit',
			array(
				'label'       => _x( 'WWSuit Theme', 'Block pattern category', 'wwsuit' ),
				'description' => __( 'A collection of patterns provided by this theme.', 'wwsuit' ),
			)
		);
	}
endif;

add_action( 'init', 'wwsuit_register_pattern_categories' );
