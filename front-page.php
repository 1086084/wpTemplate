<?php get_header(); ?>
<?php get_template_part('includes/section', 'hero'); ?>
<main>

    <?php
    while(have_posts()) {
        the_post(); ?>
        <?php the_content(); ?>
        <?php
    } ?>

</main>

<?php get_footer(); ?>