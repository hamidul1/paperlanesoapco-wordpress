<?php 
/**
 * Enqueue scripts and styles.
 */
function wpdocs_theme_slug_scripts() {
    // Custom scripts require a unique slug (Theme Name).
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/scripts/main.js', array(), '1.0.0', false );
 
    /*
     * To avoid double loading Genericons will not need a slug. Same applies
     * to all other non-custom styles or scripts.
     */
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0.0' );
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/theme.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_slug_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'woocommerce' );


/* Customizer Option Setting */
function paper_lane_soap_customize_register($wp_customize){
     
    $wp_customize->add_section('theme_front_page_customize', array(
        'title'    => __('Customize Front Page', 'paper-lane-soap'),
        'description' => '',
        'priority' => 120,
    ));
  
    //  =============================
    //  = Text Icon Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[first_icon_text]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test', array(
        'label'      => __('Earth Icon Text', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[first_icon_text]',
    ));
    //  =============================
    //  = Image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[first_icon_img]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_icon_image', array(
        'label'    => __('Earth Icon Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[first_icon_img]',
    )));

    //  =============================
    //  = Text Icon Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[scound_icon_text]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_scound', array(
        'label'      => __('Hand Made Icon Text', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[scound_icon_text]',
    ));
    //  =============================
    //  = Image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[scound_icon_img]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'scound_icon_image', array(
        'label'    => __('Hand Made Icon Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[scound_icon_img]',
    )));



    //  =============================
    //  = Text Icon Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[third_icon_text]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_third', array(
        'label'      => __('Australian Icon Text', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[third_icon_text]',
    ));
    //  =============================
    //  = Image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[third_icon_img]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'third_icon_image', array(
        'label'    => __('Australian Icon Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[third_icon_img]',
    ))); 

    //  =============================
    //  = Image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[girl_img]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'girl_image', array(
        'label'    => __('Change Girl Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[girl_img]',
    )));     

    //  =============================
    //  = Text Icon Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[bottom_text]', array(
        'default'        => 'Australias finest soaps made with natural ingredients and expertly fragranced with essential oils.',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_bottom_text', array(
        'label'      => __('Change Bottom Text', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[bottom_text]',
    ));

    //  =============================
    //  = Store Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[store_title]', array(
        'default'        => 'Store',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_store_title', array(
        'label'      => __('Change Store Title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[store_title]',
    ));

    // Add Prduct Details 

    //  =============================
    //  = product title  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[product_text_one]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_product_title_one', array(
        'label'      => __('First Product Iitle', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[product_text_one]',
    ));

    //  =============================
    //  = product link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[product_link_one]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_product_link_one', array(
        'label'      => __('First Product Link', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[product_link_one]',
    ));    

    //  =============================
    //  = product image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[product_img_one]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_product_image', array(
        'label'    => __('First Product Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[product_img_one]',
    )));

    //  =============================
    //  = product title  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[product_text_two]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_product_title_two', array(
        'label'      => __('Scound Product title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[product_text_two]',
    ));

    //  =============================
    //  = product link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[product_link_two]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_product_link_two', array(
        'label'      => __('Scound Product Link', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[product_link_two]',
    ));    

    //  =============================
    //  = product image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[product_img_two]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'scound_product_image', array(
        'label'    => __('Scound Product Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[product_img_two]',
    ))); 

    //  =============================
    //  = Learn Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_title]', array(
        'default'        => 'Learn',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_title', array(
        'label'      => __('Change Learn Title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_title]',
    ));

    //  =============================
    //  = Learn title  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_text_one]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_title_one', array(
        'label'      => __('Experts title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_text_one]',
    ));

    //  =============================
    //  = Learn link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_link_one]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_link_one', array(
        'label'      => __('Expert Link', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_link_one]',
    ));    

    //  =============================
    //  = learn image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[learn_img_one]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'learn_image_one', array(
        'label'    => __('Expert Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[learn_img_one]',
    ))); 


    //  =============================
    //  = Process title  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_text_two]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_title_two', array(
        'label'      => __('Process title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_text_two]',
    ));

    //  =============================
    //  = Process link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_link_two]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_link_two', array(
        'label'      => __('Process Link', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_link_two]',
    ));    

    //  =============================
    //  = process image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[learn_img_two]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'learn_image_two', array(
        'label'    => __('Process Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[learn_img_two]',
    )));

    //  =============================
    //  = Company title  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_text_three]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_title_three', array(
        'label'      => __('Company title', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_text_three]',
    ));

    //  =============================
    //  = Company link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[learn_link_three]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_learn_link_three', array(
        'label'      => __('Company Link', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[learn_link_three]',
    ));    

    //  =============================
    //  = learn image Upload  =
    //  =============================    

    $wp_customize->add_setting('theme_front_page[learn_img_three]', array(
        'default'           => null,
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'learn_image_three', array(
        'label'    => __('Company Image', 'paper-lane-soap'),
        'section'  => 'theme_front_page_customize',
        'settings' => 'theme_front_page[learn_img_three]',
    )));

    //  =============================
    //  = Instagram link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[instagram]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_instagram', array(
        'label'      => __('Instagram', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[instagram]',
    ));

    //  =============================
    //  = Facebook link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[facebook]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_facebook', array(
        'label'      => __('Facebook', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[facebook]',
    ));  

    //  =============================
    //  = Pintarest link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[pintarest]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_pintarestk', array(
        'label'      => __('Pinterest', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[pintarest]',
    ));  

    //  =============================
    //  = Twitter link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[twitter]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_twitter', array(
        'label'      => __('Twitter', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[twitter]',
    ));

    //  =============================
    //  = Youtube link  =
    //  =============================
    $wp_customize->add_setting('theme_front_page[youtube]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_text_test_youtube', array(
        'label'      => __('Youtube', 'paper-lane-soap'),
        'section'    => 'theme_front_page_customize',
        'settings'   => 'theme_front_page[youtube]',
    ));


    $wp_customize->add_section('theme_header_customize', array(
        'title'    => __('Customize Header', 'paper-lane-soap'),
        'description' => '',
        'priority' => 110,
    ));

    //  =============================
    //  = Text Icon Cutomize  =
    //  =============================
    $wp_customize->add_setting('theme_header_page[header_logo]', array(
        'default'        => null,
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
  
    ));
  
    $wp_customize->add_control('paper_lane_soap_header_logo', array(
        'label'      => __('Header Text', 'paper-lane-soap'),
        'section'    => 'theme_header_customize',
        'settings'   => 'theme_header_page[header_logo]',
    ));        


}
  
add_action('customize_register', 'paper_lane_soap_customize_register');

function save_custom_add_cart_item_data( $cart_item_data, $product_id, $variation_id ) {
 if( isset( $_POST['fragrance_value'] ) ) {
 $cart_item_data['fragrance_value'] = sanitize_text_field( $_POST['fragrance_value'] );
 }
 return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'save_custom_add_cart_item_data', 10, 3 );

/**
 * Add custom meta to order
 */
function show_data_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {
 if( isset( $values['fragrance_value'] ) ) {
 $item->add_meta_data(
 __( 'Fragrance', 'paper-lane-soap' ),
 $values['fragrance_value'],
 true
 );
 }
}
add_action( 'woocommerce_checkout_create_order_line_item', 'show_data_checkout_create_order_line_item', 10, 4 );


add_filter( 'woocommerce_return_to_shop_redirect', 'custom_empty_cart_redirect_url' );
function custom_empty_cart_redirect_url(){

return home_url('/');

}