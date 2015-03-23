<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
  <header>
      <?php wp_nav_menu(
          array( 'container' => 'nav',
            'theme_location' => 'main-nav',
            'container_id' => 'bottom-navigation',
            'container_class' => 'main-navigation horizontal',
            'depth' => 'depth')); ?>
  </header>