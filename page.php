<?php get_header(); ?>
	<p>page.php</p>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
		<?php get_template_part('loop'); ?>
<?php get_footer();
