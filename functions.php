<?php
/**
 * WW Suit functions and definitions
 *
 * @package WW Suit
 */

/**
 * Enqueue global stylesheet.
 */

if ( ! function_exists( 'wwsuit_responsive_styles' ) ) :
	/**
	 * Enqueue custom global stylesheet.
	 *
	 * @return void
	 */
	function wwsuit_responsive_styles() {
		wp_enqueue_style(
			'wwsuit-responsive-style',
			get_parent_theme_file_uri( 'assets/css/responsive.css' ),
			array(),
			wp_get_theme( get_template() )->get( 'Version' ),
			'screen'
		);
	}
endif;

add_action( 'init', 'wwsuit_responsive_styles' );

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
			'wwsuit-theme',
			array(
				'label'       => _x( 'WWSuit Theme', 'Block pattern category', 'wwsuit' ),
				'description' => __( 'A collection of patterns provided by this theme.', 'wwsuit' ),
			)
		);
	}
endif;

add_action( 'init', 'wwsuit_register_pattern_categories' );
