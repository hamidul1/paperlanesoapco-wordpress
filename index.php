<?php get_header();
$getalloptions = get_option('theme_front_page'); ?>
    <section class="home">
        <span class="spacer"></span>
        <div style="display: flex; align-items: start; justify-content: center;">
            <ul class="home-ul">
            <?php 
            $args = array(
            'post_type' => 'home_icon',
            'posts_per_page' => 3,
            'order'   => 'ASC',
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); ?>    
                <li class="home-li">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>">
                    <p><?php the_title(); ?></p>
                </li>
            <?php endwhile;
            } else {  }
            wp_reset_postdata(); ?>                
            </ul>
            <img class="home-main-img" src="<?php echo !empty($getalloptions['girl_img']) ? $getalloptions['girl_img'] :  get_template_directory_uri().'/img/main.jpg'; ?>" alt="">
        </div>
        <div style="text-align: center; width: calc(100% - 2em); padding: 1em;">
            <p>
                <?php echo !empty($getalloptions['bottom_text']) ? $getalloptions['bottom_text'] : 'Australias finest soaps made with natural ingredients and expertly fragranced with essential oils.'; ?>
            </p>
            <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 2em;"></i>
        </div>

    </section>
    <section class="page">
        <h1><?php echo !empty($getalloptions['store_title']) ? $getalloptions['store_title'] : 'Store'; ?></h1>
        <div class="page-links">
            <?php 
            $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a class="page-link" href="<?php the_permalink(); ?>">
                <?php ?>
                <?php if (get_post_meta(get_the_ID(), 'add_img_for_home', true)) { ?>
                <img src="<?php echo get_post_meta(get_the_ID(), 'add_img_for_home', true); ?>" alt="">
                <?php }else{ ?>
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                <?php } ?>                
                <?php if (get_post_meta(get_the_ID(), 'add_title_for_home', true)) { ?>
                <p><?php echo get_post_meta(get_the_ID(), 'add_title_for_home', true); ?></p>
                <?php }else{ ?>
                <p><?php the_title(); ?></p>
                <?php } ?>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <?php endwhile;
            } else { ?>
            <a class="page-link" href="<?php echo !empty($getalloptions['product_link_one']) ? $getalloptions['product_link_one'] : '#'; ?>">
                <img src="<?php echo !empty($getalloptions['product_img_one']) ? $getalloptions['product_img_one'] :  get_template_directory_uri().'/img/bar-square.jpg'; ?>" alt="">
                <p><?php echo !empty($getalloptions['product_text_one']) ? $getalloptions['product_text_one'] : 'Bar soap'; ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <a class="page-link" href="<?php echo !empty($getalloptions['product_link_two']) ? $getalloptions['product_link_two'] : '#'; ?>">
                <img src="<?php echo !empty($getalloptions['product_img_two']) ? $getalloptions['product_img_two'] :  get_template_directory_uri().'/img/liquid-square.jpg'; ?>" alt="">
                <p><?php echo !empty($getalloptions['product_text_two']) ? $getalloptions['product_text_two'] : 'Liquid soap'; ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </section>
    <section class="page">
        <h1><?php echo !empty($getalloptions['learn_title']) ? $getalloptions['learn_title'] : 'Learn'; ?></h1>
        <div class="page-links">
            <?php $args = array(
            'post_type' => 'page',
            'posts_per_page' => -1
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
            if (get_post_meta(get_the_ID(), 'show_this_page_at_home', true) == 'yes') { ?>            
            <a class="page-link" href="<?php the_permalink(); ?>">
                <img src="<?php echo !empty(get_post_meta(get_the_ID(), 'add_img_for_home', true)) ? get_post_meta(get_the_ID(), 'add_img_for_home', true) : 'http://placehold.it/100'; ?>" alt="">
                <p><?php the_title(); ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <?php } endwhile;
            } else { ?> 
            <?php }
            wp_reset_postdata(); ?>                       
        </div>
    </section>
    <footer class="index-footer">
        <div class="socialbuttons">
            <a href="<?php echo !empty($getalloptions['instagram']) ? $getalloptions['instagram'] : 'https://www.instagram.com/paperlanesoapco/'; ?>"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo !empty($getalloptions['facebook']) ? $getalloptions['facebook'] : 'https://www.facebook.com/paperlanesoapco/'; ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo !empty($getalloptions['pintarest']) ? $getalloptions['pintarest'] : 'https://www.pinterest.com.au/paperlanesoapco/'; ?>"><i class="fab fa-pinterest-p"></i></a>
            <a href="<?php echo !empty($getalloptions['twitter']) ? $getalloptions['twitter'] : 'https://twitter.com/PaperLaneSoapCo'; ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo !empty($getalloptions['youtube']) ? $getalloptions['youtube'] : 'https://www.youtube.com/channel/UCiWMRkI8WgISq_ogdZqydZA'; ?>"><i class="fab fa-youtube"></i></a>
        </div>
        <a href="mailto:hello@paperlanesoapco.com">Contact Us</a>
        <!-- <a href="">Privacy Policy</a> -->
    </footer>
<?php get_footer(); ?>