<?php get_header();
$getalloptions = get_option('theme_front_page'); ?>
    <section class="home">
        <span class="spacer"></span>
        <div style="display: flex; align-items: center; justify-content: center;">
            <ul class="home-ul">
                <li class="home-li">
                    <img src="<?php echo !empty($getalloptions['first_icon_img']) ? $getalloptions['first_icon_img'] :  get_template_directory_uri().'/img/world.png'; ?>" alt="">
                    <p><?php echo !empty($getalloptions['first_icon_text']) ? $getalloptions['first_icon_text'] : 'Earth Safe'; ?></p>
                </li>
                <li class="home-li">
                    <img src="<?php echo !empty($getalloptions['scound_icon_img']) ? $getalloptions['scound_icon_img'] :  get_template_directory_uri().'/img/hand.png'; ?>" alt="">
                    <p><?php echo !empty($getalloptions['scound_icon_text']) ? $getalloptions['scound_icon_text'] : 'Hand Made'; ?></p>
                </li>
                <li class="home-li">
                    <img src="<?php echo !empty($getalloptions['scound_icon_img']) ? $getalloptions['scound_icon_img'] :  get_template_directory_uri().'/img/australia.png'; ?>" alt="">
                    <p><?php echo !empty($getalloptions['third_icon_text']) ? $getalloptions['third_icon_text'] : 'Australian'; ?></p>
                </li>
            </ul>
            <img class="home-main-img" src="<?php echo !empty($getalloptions['girl_img']) ? $getalloptions['girl_img'] :  get_template_directory_uri().'/img/main.png'; ?>" alt="">
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
        </div>
    </section>
    <section class="page">
        <h1><?php echo !empty($getalloptions['learn_title']) ? $getalloptions['learn_title'] : 'Learn'; ?></h1>
        <div class="page-links">
            <a class="page-link" href="<?php echo !empty($getalloptions['learn_link_one']) ? $getalloptions['learn_link_one'] : '#'; ?>">
                <img src="<?php echo !empty($getalloptions['learn_img_one']) ? $getalloptions['learn_img_one'] : 'http://placehold.it/100'; ?>" alt="">
                <p><?php echo !empty($getalloptions['learn_text_one']) ? $getalloptions['learn_text_one'] : 'Experts'; ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <a class="page-link" href="<?php echo !empty($getalloptions['learn_link_two']) ? $getalloptions['learn_link_two'] : '#'; ?>">
                <img src="<?php echo !empty($getalloptions['learn_img_two']) ? $getalloptions['learn_img_two'] : 'http://placehold.it/100'; ?>" alt="">
                <p><?php echo !empty($getalloptions['learn_text_two']) ? $getalloptions['learn_text_two'] : 'Process'; ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
            <a class="page-link" href="<?php echo !empty($getalloptions['learn_link_three']) ? $getalloptions['learn_link_three'] : '#'; ?>">
                <img src="<?php echo !empty($getalloptions['learn_img_three']) ? $getalloptions['learn_img_three'] : 'http://placehold.it/100'; ?>" alt="">
                <p><?php echo !empty($getalloptions['learn_text_three']) ? $getalloptions['learn_text_three'] : 'Company'; ?></p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
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