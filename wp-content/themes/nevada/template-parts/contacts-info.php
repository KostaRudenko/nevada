<div class='contacts-wrapper'>
    <div class="contacts border border--top border--bottom border--top-pseudo border--bottom-pseudo">
        <div class='contacts__item contacts__item--adress separator separator--right'>

            <?php if( have_rows('address', 'option') ): 
                while( have_rows('address', 'option') ): the_row(); 
                    $address_title = get_sub_field('address_title', 'option');
                    $address_text = get_sub_field('address_text', 'option');
                    ?>
                        <h3 class="contacts__title"><?php echo $address_title; ?></h3>
                        <p class="contacts__text"><?php echo $address_text; ?></h3></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class='contacts__item contacts__item--email separator separator--right'>
            <?php if( have_rows('contact', 'option') ): 
                while( have_rows('contact', 'option') ): the_row(); 
                    $contact_title = get_sub_field('contact_title', 'option');
                    $contact_email = get_sub_field('contact_email', 'option');
                    ?>
                        <h3 class="contacts__title"><?php echo $contact_title; ?></h3>
                        <a href="mailto:<?php echo $contact_email; ?>" class="contacts__email"><?php echo $contact_email; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class='contacts__item'>
            <?php if( have_rows('connect', 'option') ): 
                while( have_rows('connect', 'option') ): the_row(); 
                    $contact_title = get_sub_field('connect_title', 'option');
                    ?>
                       <h3 class="contacts__title"><?php echo $contact_title; ?></h3>

                        <?php if( have_rows('social_list', 'option') ): ?>
                            <ul class="social-list">
                                <?php while( have_rows('social_list', 'option') ): the_row(); 

                                    $social_link = get_sub_field('social_link', 'option');
                                    $social_icon = get_sub_field('social_icon', 'option');
                                    ?>
                                    <li class="social-list__item">

                                        <?php if( $social_link ): ?>
                                            <a class="social-list__link" href="<?php echo $social_link; ?>">
                                        <?php endif; ?>

                                            <i class="<?php echo $social_icon; ?>"></i>

                                        <?php if( $social_link ): ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>