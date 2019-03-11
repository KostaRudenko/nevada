<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="page-header">
		
		<div class="navigation-wrap">
			<nav class="main-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
			</nav>
			<button class="burger-menu btn">
				<span class="burger-menu__item"></span>
				<span class="burger-menu__item"></span>
				<span class="burger-menu__item"></span>
			</button>
		</div>

		<?php get_template_part( 'template-parts/banner' ); ?>
		
	</header>


