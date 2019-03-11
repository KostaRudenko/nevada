<div class="banner-wrapper">
    <div class="banner-wrapper 
		<?php switch ($post->post_name) {
    			case 'home':
        			echo 'banner-wrapper--home';
					break;
				case 'wines':
					echo 'banner-wrapper--wine';
					break;
				case 'media':
					echo 'banner-wrapper--media';
					break;
				case 'contact':
					echo 'banner-wrapper--contact';
					break;
				case 'events':
					echo 'banner-wrapper--events';
					break;
				default:
					break;
			};
        ?>"

		<?php
			$banner_image = get_field('banner_image');

			if ($banner_image) : ?>
				style="background-image: url(<?php echo $banner_image; ?>)"
			<?php endif;
		?>
			>
			
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
</div>