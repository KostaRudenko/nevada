<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
        
        <div>
                <?php 
                    $story_title = get_field('field_label');
                    $main_text = get_field('some_here');
                ?>

                <h2><?php echo $story_title; ?></h2>
                <p><?php echo $main_text; ?></p>
        </div>
    


<?php get_footer(); ?>
