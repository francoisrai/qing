<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    	<!--<base href="">-->
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="navigation">
        <?php
        wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_id' => 'primary-menu',
        )
        );
        ?>
    </nav>
    <?php wp_body_open(); ?>