<div class="banner-wrapper">
            <div class="banner-wrapper <?php echo is_front_page() ? 'banner-wrapper--home' : 'banner-wrapper--wine' ?>"
            
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
								<img class="card-wrapper__img" src="<?php echo $logo; ?>" alt="NevadaSunset-logo">
							<?php endif;
						?>
					</div>
				</div>
			</div>
		</div>