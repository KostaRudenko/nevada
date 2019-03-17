	
<article class="public-article border border--top border--top-pseudo" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h3 class="public-article__event-date">
		<?php echo get_the_date('M j Y')?>
	</h3> 

	<?php the_title( '<h3 class="public-article__title">', '</h3>' ); ?>

	<p class="public-article__text public-article__text--respons">
		<?php echo get_the_excerpt(); ?>
	</p>
	
	<footer class="public-article__footer public-article__footer--resp">

			<?php if( have_rows('calendar_btn', 'option') ): 

				while( have_rows('calendar_btn', 'option') ): the_row(); 
					
					// vars
					$calendar_title = get_sub_field('title', 'option');
					$calendar_icon = get_sub_field('icon', 'option');
					
					?>
					<button class="btn btn--calendar btn--arr-left"><span class="btn__icon btn__icon--left">
						<i class="<?php echo $calendar_icon; ?>"></i></span><?php echo $calendar_title; ?>
					</button>
				<?php endwhile; ?>

		<?php endif; ?>

		<?php if( have_rows('events_btn', 'option') ): 

			while( have_rows('events_btn', 'option') ): the_row(); 
				
				$event_btn_title = get_sub_field('title', 'option');
				$event_btn_icon = get_sub_field('icon', 'option');
				
				?>
 				<a href="<?php echo get_the_permalink(); ?>" class="btn"><span class="btn__icon"><i class="<?php echo $event_btn_icon; ?>"></i></span><?php echo $event_btn_title; ?></a>
			<?php endwhile; ?>

		<?php endif; ?>
      
    </footer>
	
</article>
