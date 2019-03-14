<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>

	<div class="page-content">
		<?php the_content(); ?>
	</div>

</article>
