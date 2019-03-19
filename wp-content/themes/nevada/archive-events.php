<?php get_header(); ?>

<div class="page-container">
    <section class="events">
        <h3 class="section-title-indent section-title-indent--bottom"><?php echo the_field('events_section_title', 'option'); ?></h3>
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

                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

                    <?php dynamic_sidebar( 'sidebar-1' ); ?>

                <?php endif; ?>

            </div>

        </div>

    </section>

	<?php get_template_part( 'template-parts/contacts-info' ); ?>
		
</div>

<?php get_footer(); ?>


