<article id="post-<?php the_ID(); ?>" class="public-article public-article--single-event public-article border border--top border--top-pseudo" <?php post_class(); ?>>

    <h3 class="public-article__event-date"><?php the_field('date') ?></h3>
    <div class="events__content">

        <?php the_content(); ?>

    </div>

    <footer class="public-article__footer public-article__footer--resp public-article__footer--to-event-position">

        <?php if( have_rows('single_event_btn', 'option') ): 

            while( have_rows('single_event_btn', 'option') ): the_row(); 
                
                $single_btn_title = get_sub_field('title', 'option');
                $single_btn_icon = get_sub_field('icon', 'option');
                
                ?>

                <a href="<?php echo get_post_type_archive_link('events'); ?>" class="btn btn--arr-left">
                    <span class="btn__icon btn__icon--left">
                        <i class="<?php echo $single_btn_icon; ?>"></i>
                    </span>

                    <?php echo $single_btn_title; ?>

                </a>

            <?php endwhile; ?>

        <?php endif; ?>

        <?php if( have_rows('calendar_btn', 'option') ): 

            while( have_rows('calendar_btn', 'option') ): the_row(); 
                
                $calendar_title = get_sub_field('title', 'option');
                $calendar_icon = get_sub_field('icon', 'option');
                
            ?>

            <button class="btn btn--calendar btn--arr-left"><span class="btn__icon btn__icon--left">
                <i class="<?php echo $calendar_icon; ?>"></i></span><?php echo $calendar_title; ?>
            </button>

            <?php endwhile; ?>

        <?php endif; ?>

    </footer>

</article>

