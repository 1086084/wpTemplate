<?php
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('includes/section', 'content'); ?>
        
        <?php the_content(); ?>
        <hr>

        <?php
    }
?>