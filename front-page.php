<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wawco_Tuxedo
 */

get_header(); ?>
<p>Page: front-page.php</p>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="intro">
			<h1>Firstname Lastname</h1>
			<h2>Smart.</h2>
			<h2>Good looking.</h2>
			<h2>Revolutionary.</h2>
		</section>
		<section class="content">
			<?php get_template_part( 'template-parts/loop' ); ?>
		</section>
	</main>
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
