<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wawco_Tuxedo
 */

get_header(); ?>

<p class="debug">File: page.php</p>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
			<?php get_template_part('template-parts/loop'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
