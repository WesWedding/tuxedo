<?php get_header(); ?>
	<p class="debug">This is the home.php file.</p>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
			<?php get_template_part('template-parts/loop'); ?>
		</main>
	</div>
<?php
get_sidebar();
get_footer();

