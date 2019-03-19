	<footer class="page-footer" role="contentinfo">

		<div class="page-footer__inner">
		
			<?php
				$logo_footer = get_field('logo-footer', 'option');

				if ($logo_footer) : ?>

					<img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt'] ?>" />

				<?php endif;
			?>
			
    		<p class="copyright"><?php the_field('footer_text', 'option'); ?></p>
			
		</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
