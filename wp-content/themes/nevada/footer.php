	<footer class="page-footer" role="contentinfo">

		<div class="page-footer__inner">

			<?php 
				$logo_footer = get_field('logo-footer', 'option');
				$text_footer = get_field('footer_text', 'option');
			?>

			<?php
				if ($logo_footer) : ?>
					<img src="<?php echo $logo_footer; ?>" alt="NevadaSunset-logo">
				<?php endif;
			?>
			
    		<p class="copyright"><?php echo $text_footer; ?></p>
		</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
