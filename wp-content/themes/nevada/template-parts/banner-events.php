<div class="banner-wrapper">
    <div class="banner-wrapper banner-wrapper--events"

		<?php
					
			$banner = get_field('events_banner', 'option');

			if ($banner) : ?>

				style="background-image: url(<?php echo $banner; ?>)"
				
			<?php endif;
		?>
			>
</div>


