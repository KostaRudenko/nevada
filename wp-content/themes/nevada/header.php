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

		
		<?php 
			if (is_archive('events')) {
			 	get_template_part( 'template-parts/banner-events' );
			} else {
				get_template_part( 'template-parts/banner' );
			}
		?>
		

		<div class="card-wrapper card-wrapper--respons <?php echo is_front_page() ? null : 'card-wrapper--mar-top' ?>">
			<div class="card-wrapper__content">
				<?php 
					$logo = get_field('logo', 'option');

					if ($logo) : ?>
						<img class="card-wrapper__img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
					<?php endif;
				?>
				</div>
			</div>
		</div>
		
	</header>


