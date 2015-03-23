<?php get_header(); ?>
 This is the home.php file.
	<body>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
		<?php get_template_part('loop'); ?>
<?php get_footer(); ?>
