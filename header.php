<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?> 
    <?php the_field('description_seo'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <?php wp_head(); ?>
	</head>

  <body>
		<header>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Peralta's Logo" class="logo_header">
			<nav class="nav_bar">
        <?php
          $args = array(
            'menu' => 'principal',
            'container' => false
          );
          wp_nav_menu( $args );
        ?>
			</nav>
		</header>