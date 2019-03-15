<?php get_header(); ?>
<div class="page-container">
        <section class="events">
                <h3 class="section-title-indent section-title-indent--bottom">events</h3>
                <div class="events__content-wrap">
                    <div class="events__event-wrap">
					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'events' ); ?>

						<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>	

                    </div>
                    

                    <div class="events__calendar border border--top border--top-pseudo">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque omnis quod molestias nobis corporis commodi accusantium iusto repellendus in sed, nesciunt, dolores unde voluptas, amet vero dolorem exercitationem recusandae aut?
                        </p>
                    </div>
                </div>
        </section>

		<?php get_template_part( 'template-parts/contacts-info' ); ?>
		
    </div>
<?php get_footer(); ?>


