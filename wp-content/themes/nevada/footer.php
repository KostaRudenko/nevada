	<footer class="page-footer" role="contentinfo">

		<div class="page-footer__inner">

			<?php
				$logo_footer = get_field('logo-footer', 'option');

				if ($logo_footer) : ?>
					<img src="<?php echo $logo_footer; ?>" alt="NevadaSunset-logo">
				<?php endif;
			?>
			
    		<p class="copyright">Copyright All rights reserved Nevada Sunset LLC</p>
		</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
