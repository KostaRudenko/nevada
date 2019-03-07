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

		<div class="banner-wrapper">
			<div class="banner-wrapper banner-wrapper--wine"
				<?php
					$bg_wines = get_field('bg_wines', 'option');

					if ($bg_wines) : ?>
						style="background-image: url(<?php echo $bg_wines; ?>)"
					<?php endif;
				?>
			>
				<div class="card-wrapper card-wrapper--respons">
					<div class="card-wrapper__content">
						<?php 
							$logo = get_field('logo', 'option');

							if ($logo) : ?>
								<img class="card-wrapper__img" src="<?php echo $logo; ?>" alt="NevadaSunset-logo">
							<?php endif;
						?>
					</div>
				</div>
			</div>
		</div>

	</header>
