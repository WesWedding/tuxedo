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

/**
 * Allow SVG uploads for trusted users.
 *
 * This probably ought to be enabled by a plugin rather than a theme, but Wes
 * wants to enable SVG logo uploads to use in this theme.
 *
 * @param array $upload_mimes Allowed mime types.
 *
 * @return mixed
 *
 * @see https://library.wpcode.com/snippet/r5plmlo8/ The WPCode snippet used as the basis for this.
 */
add_filter(
	'upload_mimes',
	function ( $upload_mimes ) {
		// SVG files come with the same risk as unfiltered html; they can be used to insert malicious code.
		// If this user can't do so, they don't get to upload SVGs.
		if ( ! current_user_can( 'unfiltered_html' ) ) {
			return $upload_mimes;
		}

		$upload_mimes['svg']  = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';

		return $upload_mimes;
	}
);

/**
 * Add SVG files mime check.
 *
 * @param array        $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string       $file Full path to the file.
 * @param string       $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[]     $mimes Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
 *
 * @see https://library.wpcode.com/snippet/r5plmlo8/ The WPCode snippet used as the basis for this.
 */
add_filter(
	'wp_check_filetype_and_ext',
	function ( $wp_check_filetype_and_ext, $file, $filename, $mimes ) {

		if ( ! $wp_check_filetype_and_ext['type'] ) {

			$check_filetype  = wp_check_filetype( $filename, $mimes );
			$ext             = $check_filetype['ext'];
			$type            = $check_filetype['type'];
			$proper_filename = $filename;

			if ( $type && str_starts_with( $type, 'image/' ) && 'svg' !== $ext ) {
				$ext  = false;
				$type = false;
			}

			$wp_check_filetype_and_ext = compact( 'ext', 'type', 'proper_filename' );
		}

		return $wp_check_filetype_and_ext;
	},
	10,
	5
);
