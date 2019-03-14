<?php
/*
 * Template Name: Media Page
 */
?>

<?php get_header(); ?>

    <div class='page-container'>
        <section class="publication">

            <?php while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>
                    
            <?php endwhile; ?>

            <?php if( have_rows('article_list') ): ?>

                <div class="masonry-block">

                    <?php while( have_rows('article_list') ): the_row(); ?>

                        <div class="masonry-block__item">
                            <article class="public-article border border--top border--top-pseudo">
                                <header>
                                    <span class="public-article__post-date"><?php echo the_sub_field('date'); ?></span>
                                    <h3><?php echo the_sub_field('title'); ?></h3>
                                </header>
                                
                                <?php
                                    $image = get_sub_field('image'); 

                                    if ($image) : ?>

                                        <div class="public-article__photo-wrap">
                                            <img class="public-article__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                        </div>

                                    <?php endif;
                                ?>

                                <p><?php echo the_sub_field('text'); ?></p>
                                <footer class="public-article__footer">

                                        <?php if( have_rows('link') ): 

                                            while( have_rows('link') ): the_row(); 

                                                $link = get_sub_field('link');                                                   
                                        ?>

                                            <?php 

                                                $link_url = get_sub_field('link_url');
                                                $link_text = get_sub_field('link_text');
                                                $link_icon = get_sub_field('link_icon');
                                                        
                                            if( $link_url ): ?>  
                                                                
                                                <a class="btn" href="<?php echo $link_url; ?>"><span class="btn__icon"><i class="<?php echo $link_icon;?>"></i></span><?php echo $link_text; ?></a>

                                            <?php endif; ?>
                                                   
                                        <?php endwhile; ?>

                                        <?php endif; ?>
                                        
                                </footer>

                            </article>

                        </div>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

        </section>

        <?php get_template_part( 'template-parts/contacts-info' ); ?>

    </div>

<?php get_footer(); ?>