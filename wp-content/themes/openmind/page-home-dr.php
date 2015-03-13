<?php
/*
 * Template Name: Home Template DR
 * Description: Home Template DR.
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content('Read More...'); ?>
    <?php endwhile; ?>
<?php endif; ?>





    <div class="container">
        <?php edit_post_link('edit', '<p>', '</p>'); ?>
    </div>

<?php get_footer(); ?>
