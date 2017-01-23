<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<?php wp_head(); ?>
	</head>
	<body id="body" <?php body_class(); ?>>
		<a class="menu-link" href="#navigation">Menu</a>
		<nav class="main-navigation" id="navigation">
			<a href="#body" class="exit-menu" aria-label="Exit icon">
				<?php get_template_part( 'img/exit', 'icon' ); ?>
			</a>
			<?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?>

			<div class="logotype-container">
				<?php get_template_part( 'img/logo' ); ?>
			</div>
		</nav>
		<div class="logo">
			<a href="<?php bloginfo( 'wpurl' );?>">
				<?php get_template_part( 'img/lens' ); ?>
				<h1 class="main-title">
					<span class="photographer-name">Johan Alfredsson</span><br>
					<span class="photographer-title">Photography</span>
				</h1>
			</a>
		</div>
		<main class="site-main" role="main">
