<?php
/**
 * Template part for displaying the post navigation.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wawco_Tuxedo
 */

the_post_navigation( array(
	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'wawcotuxedo' ) . '</span><span class="nav-wrapper"><span aria-hidden="true" class="nav-icon">&laquo;</span><span
 class="nav-title">%title</span></span>',
	'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'wawcotuxedo' ) . '</span><span class="nav-wrapper"><span class="nav-title">%title</span><span aria-hidden="true" class="nav-icon">&raquo;</span></span>',
) );