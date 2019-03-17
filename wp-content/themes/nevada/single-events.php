<?php get_header(); ?>
<div class="page-container">
        <section class="events single-event">

			<?php the_title( '<h3 class="section-title-indent section-title-indent--bottom">', '</h3>' ); ?>

            <div class="events__content-wrap">
                <div class="events__event-wrap">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/event', 'single'); ?>

					<?php endwhile; ?>

                </div>
    
                <div class="events__calendar border border--top border--top-pseudo">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque omnis quod molestias nobis corporis
                        commodi accusantium iusto repellendus in sed, nesciunt, dolores unde voluptas, amet vero dolorem
                        exercitationem recusandae aut?
                    </p>
                </div>
            </div>
		</section>
		
		<?php get_template_part( 'template-parts/contacts-info' ); ?>

    </div>

<?php get_footer(); ?>
