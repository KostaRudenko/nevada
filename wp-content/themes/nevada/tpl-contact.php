<?php
/*
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

    <div class="page-container">
        <section class="contact">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="contact__title-wrap">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

            <?php get_template_part( 'template-parts/contacts-info' ); ?>

            <div class="map-wrapper">
                <div id='map'>
                    <?php echo do_shortcode('[google_map_easy id="1"]')?>
                </div>

                    <div class="working-hours">
                        <div class="card-wrapper card-wrapper--woking-hours">
                            <div class="card-wrapper__content">
                                <h3 class="card-wrapper__title">working hours</h3>
                                <div class="card-wrapper__work-hours">
                                    <p class="card-wrapper__work-day">Thursday:</p>
                                    <p>4 PM - 9 PM</p>
                                </div>
                                <div class="card-wrapper__work-hours">
                                    <p class="card-wrapper__work-day">Friday:</p>
                                    <p>4 PM - 9 PM</p>
                                </div>
                            <div class="card-wrapper__work-hours">
                                    <p class="card-wrapper__work-day">Saturday:</p>
                                    <p>4 PM - 9 PM</p>
                            </div>
                            
                            </div>
                        </div>
                    </div>
            </div>

        </section>
    </div>
	

<?php get_footer(); ?>