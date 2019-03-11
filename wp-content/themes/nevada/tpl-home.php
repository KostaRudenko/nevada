<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
        
        <div class='page-container'>
                <div class='our-story'>
                        <?php while ( have_posts() ) : the_post(); ?>
                                <?php the_title('<h3', '</h3>'); ?>
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

                <?php get_template_part( 'template-parts/contacts-info' ); ?>
                
        </div>
    


<?php get_footer(); ?>
