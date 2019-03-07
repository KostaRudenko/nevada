<div class="banner-wrapper">
            <div class="banner-wrapper 
                <?php if (is_page('home')) {
                    echo 'banner-wrapper--home';
                } elseif (is_page('wines')) {
                    echo 'banner-wrapper--wine';
                } elseif (is_page('media')) {
                    echo 'banner-wrapper--media';
                } elseif (is_page('contact')) {
                    echo 'banner-wrapper--contact';
                } elseif (is_page('events')) {
                    echo 'banner-wrapper--events';
                }
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
								<img class="card-wrapper__img" src="<?php echo $logo; ?>" alt="NevadaSunset-logo">
							<?php endif;
						?>
					</div>
				</div>
			</div>
		</div>