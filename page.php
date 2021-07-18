<?php if (!defined('ABSPATH')) exit;
get_header(); ?>
    <div class="about">
        <?php 
        /* Start the Loop */
        if ( have_posts() ) :
        while ( have_posts() ) :
        the_post();
        the_content(); 
        endwhile;
        endif;
        ?>
    </div>
<?php get_footer(); ?>