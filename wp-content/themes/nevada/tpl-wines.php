<?php
/*
 * Template Name: Wines Page
 */
?>

<?php get_header(); ?>

    <div class='page-container'>
        <section class="our-wines">
            <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; ?>
             
            <?php if( have_rows('wine_list') ): ?>

                <div class="wrapp-bottle border border--top border--top-pseudo border--bottom">
                    <?php while( have_rows('wine_list') ): the_row(); 
                            // vars
                            $image = get_sub_field('wine_image');
                            $btl_cap = get_sub_field('bottle_cap');
                            $bottle_cap_icon = get_sub_field('bottle_cap_icon');

                            $bottle_info = get_sub_field('bottle_info');
                        ?>
                        
                        <div class="bottle-card separator separator--bottom">

                            <div class="bottle-card__photo-wrapper separator separator--right">
                                <?php if ($bottle_cap_icon) : ?>
                                    <style>
                                        .bottle-card__btl-cappacity:before {
                                            background-image: url(<?php echo $bottle_cap_icon; ?>)
                                        }
                                    </style>
                                <?php endif?>

                                <img class="bottle-card__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <span class="bottle-card__btl-cappacity" ><?php echo $btl_cap; ?></span>
                            </div>

                            <div class="bottle-card__info">
                                <?php echo $bottle_info; ?>

                                <?php if( have_rows('bottle_characteristics') ): ?>
                                    <div class="bottle-card__characteristics">

                                        <?php while( have_rows('bottle_characteristics') ): the_row(); 
                                            // vars
                                            $characteristics_title = get_sub_field('characteristics_title');
                                            $characteristics_text = get_sub_field('characteristics_text');
                                        ?>

                                        <p><span class="bottle-card__type"><?php echo $characteristics_title; ?> </span><?php echo $characteristics_text ?></p>

                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            </div>
                        <?php endwhile; ?>
                </div>
            <?php endif; ?>        
        </section>

        <?php get_template_part( 'template-parts/contacts-info' ); ?>
    </div>

<?php get_footer(); ?>