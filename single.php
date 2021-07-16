<?php get_header(); ?>
    <div class="about">
        <?php 
        /* Start the Loop */
        while ( have_posts() ) :
        the_post();
        the_content(); 
        endwhile;
        ?>
    </div>
<?php get_footer(); ?>