<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

        <div class='page-container'>
                <div class='our-story'>

                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content(); ?>

                        <?php endwhile; ?>

                </div>

                <?php if( have_rows('insta_photos') ): ?>

                        <ul class="insta-photo-list">

                                <?php while( have_rows('insta_photos') ): the_row(); 
                                
                                        $image = get_sub_field('image');
                                ?>

                                        <li class="insta-photo-list__item">
                                                <img class='insta-photo-list__image' src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                        </li>

                                <?php endwhile; ?>
                        </ul>

                <?php endif; ?>
                
                <div class='subscribe-form-wrapper'>

                        <?php echo do_shortcode ('[contact-form-7 id="169" title="Email Subscribe form"]'); ?> 
                </div>

                <div class='meet-us' 
                
                        <?php
                                $bg_image = get_field('meet_us_bg');

                                if ($bg_image) : ?>
                                        style="background-image: url(<?php echo $bg_image; ?>)"
                                <?php endif;
                        ?>
                >
                        <div class="card-wrapper">
                                <div class="card-wrapper__content">
                                        <h3><?php the_field('meet_us_title'); ?></h3>
                                        <p><?php the_field('meet_us_text'); ?></p>
                                </div>
                        </div>
                </div>

                <?php get_template_part( 'template-parts/contacts-info' ); ?>
                
        </div>
    
<?php get_footer(); ?>
