<div class="banner-wrapper">
    <div class="banner-wrapper banner-wrapper--404"

		<?php
					
			$banner = get_field('404_banner', 'option');

			if ($banner) : ?>

				style="background-image: url(<?php echo $banner; ?>)"
				
			<?php endif;
		?>
			>
</div>