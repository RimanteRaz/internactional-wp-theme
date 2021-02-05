<?php

function internactional_theme_support(){
    // Adds dynamic tittle tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'internactional_theme_support');

function internactional_menus(){
    $locations = array(
        'primary' => "Desktop Primary Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'internactional_menus');



function internactional_register_styles(){
    $version = wp_get_theme()->get( 'Version' ); //gets the version that is declared in our style sheet
    wp_enqueue_style('internactional-style', get_template_directory_uri()."/style.css", array('internactional-bootstrap'), rand(111,9999), 'all');
    wp_enqueue_style('internactional-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", array(), '5.0.0', 'all');
    wp_enqueue_style('internactional-fonts', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap", array(), null);
}

add_action('wp_enqueue_scripts', 'internactional_register_styles');

function internactional_register_scripts(){
    wp_enqueue_script('internactional-bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', array(), '2.5.4', true);
    wp_enqueue_script('internactional-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array(), '5.0.0', true);

}

add_action('wp_enqueue_scripts', 'internactional_register_scripts');


// Add widget areas:
function footer_widget_init() {
    register_sidebar(array(
        'name' => 'Footer Widget Area',
        'id' => "footer_1",
        'before_widget' => '<div class = "footerWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}

add_action( 'widgets_init', 'footer_widget_init');

function contact_widget_init() {
    register_sidebar(array(
        'name' => 'Contact Us Widget Area',
        'id' => "contact_1",
        'before_widget' => '<div class = "contactWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}

add_action( 'widgets_init', 'contact_widget_init');


// Add sections to admin customize screen:
function internactional_header($wp_customize) {
    $wp_customize->add_section('internactional-header-section',array(
        'title' => 'Edit: Header'
    ));

    $wp_customize->add_setting('internactional-header-logo');

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'internactional-header-logo-control', array(
        'label' => 'Logo Image File',
        'section' => 'internactional-header-section',
        'settings' => 'internactional-header-logo',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting('internactional-header-headline', array(
        'default' => 'Create an internship that ignites change'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'internactional-header-headline-control', array(
        'label' => 'Headline',
        'section' => 'internactional-header-section',
        'settings' => 'internactional-header-headline'
    )));

    $wp_customize->add_setting('internactional-header-cta-text', array(
        'default' => 'Join Us'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'internactional-header-cta-text-control', array(
        'label' => 'Call-to-action button text',
        'section' => 'internactional-header-section',
        'settings' => 'internactional-header-cta-text'
    )));

    $wp_customize->add_setting('internactional-header-cta-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'internactional-header-cta-link-control', array(
        'label' => 'Call-to-action button link',
        'section' => 'internactional-header-section',
        'settings' => 'internactional-header-cta-link',
        'type' => 'dropdown-pages'
    )));
}

add_action('customize_register', 'internactional_header');


function intact_home_row1($wp_customize){
    $wp_customize->add_section('intact-home-row1-section',array(
        'title' => 'Edit: Boxes after Heading'
    ));

    // 1st BOX:
    $wp_customize->add_setting('intact-home-row1-box1-image');

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'intact-home-row1-box1-image-control', array(
        'label' => '1st box image',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box1-image',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting('intact-home-row1-box1-title', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box1-title-control', array(
        'label' => '1st box title',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box1-title'
    )));

    $wp_customize->add_setting('intact-home-row1-box1-text', array (
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box1-text-control', array(
        'label' => '1st box text',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box1-text',
        'type' => 'textarea'
    )));

    // 2nd BOX:
    $wp_customize->add_setting('intact-home-row1-box2-image');

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'intact-home-row1-box2-image-control', array(
        'label' => '2nd box image',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box2-image',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting('intact-home-row1-box2-title', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box2-title-control', array(
        'label' => '2nd box title',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box2-title'
    )));

    $wp_customize->add_setting('intact-home-row1-box2-text', array (
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box2-text-control', array(
        'label' => '2nd box text',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box2-text',
        'type' => 'textarea'
    )));

    // 3rd BOX:
    $wp_customize->add_setting('intact-home-row1-box3-image');

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'intact-home-row1-box3-image-control', array(
        'label' => '3rd box image',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box3-image',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting('intact-home-row1-box3-title', array(
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box3-title-control', array(
        'label' => '3rd box title',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box3-title'
    )));

    $wp_customize->add_setting('intact-home-row1-box3-text', array (
        'default' => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-home-row1-box3-text-control', array(
        'label' => '3rd box text',
        'section' => 'intact-home-row1-section',
        'settings' => 'intact-home-row1-box3-text',
        'type' => 'textarea'
    )));
}
add_action('customize_register', 'intact_home_row1');



function intact_stories($wp_customize){
    $wp_customize->add_section('intact-stories-section', array(
        'title' => 'Edit: Stories',
        'description' => 'This section can be found in the front page under the title "Stories".'
    ));

    $wp_customize->add_setting('intact-stories-amount');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-stories-amount-control', array(
        'label' => 'Amount of stories displayed',
        'section' => 'intact-stories-section',
        'settings' => 'intact-stories-amount',
        'type' => 'number'
    )));

    $wp_customize->add_setting('intact-stories-button-text');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-stories-button-text-control', array(
        'label' => 'Button text',
        'section' => 'intact-stories-section',
        'settings' => 'intact-stories-button-text'
    )));

    $wp_customize->add_setting('intact-stories-button-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-stories-button-link-control', array(
        'label' => 'Button link',
        'section' => 'intact-stories-section',
        'settings' => 'intact-stories-button-link',
        'type' => 'url'
    )));
}
add_action('customize_register', 'intact_stories');


function intact_more($wp_customize){
    $wp_customize->add_section('intact-more-section', array(
        'title' => 'Edit: More Information',
        'description' => 'This section can be found in the Homepage, bellow the Stories section'
    ));

    // 1st BOX:
    $wp_customize->add_setting('intact-more-box1-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box1-title-control', array(
        'label' => '1st box title',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box1-title'
    )));

    $wp_customize->add_setting('intact-more-box1-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box1-text-control', array(
        'label' => '1st box text',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box1-text',
        'type' => 'textarea'
    )));

    // 2nd BOX:
    $wp_customize->add_setting('intact-more-box2-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box2-title-control', array(
        'label' => '2nd box title',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box2-title'
    )));

    $wp_customize->add_setting('intact-more-box2-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box2-text-control', array(
        'label' => '2nd box text',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box2-text',
        'description' => 'Edit the text within the < li > tags. In order to add another list item, add an additional row of < li > tags.',
        'type' => 'textarea'
    )));

    // 3rd BOX:
    $wp_customize->add_setting('intact-more-box3-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box3-title-control', array(
        'label' => '3rd box title',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box3-title'
    )));

    $wp_customize->add_setting('intact-more-box3-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-box3-text-control', array(
        'label' => '3rd box text',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-box3-text',
        'description' => 'Edit the text within the < li > tags. In order to add another list item, add an additional row of < li > tags.',
        'type' => 'textarea'
    )));

    // Button: 
    $wp_customize->add_setting('intact-more-button-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-button-text-control', array(
        'label' => 'Button text',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-button-text'
    )));

    $wp_customize->add_setting('intact-more-button-link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-more-button-link-control', array(
        'label' => 'Button link',
        'section' => 'intact-more-section',
        'settings' => 'intact-more-button-link',
        'type' => 'dropdown-pages'
    )));
}

add_action('customize_register', 'intact_more');

// REVIEWS:
function intact_reviews($wp_customize){
    $wp_customize->add_section('intact-reviews-section', array(
        'title' => 'Edit: Reviews',
        'description' => 'This section can be found at the end of the homepage, above the Footer area.'
    ));

    // 1st box:
    $wp_customize->add_setting('intact-reviews-box1-text');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box1-text-control', array(
        'label' => __('1st box review text'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box1-text',
        'type' => 'textarea',
    )));

    $wp_customize->add_setting('intact-reviews-box1-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-reviews-box1-image-control', array(
        'label' => __('1st box photo'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box1-image',
        'height' => 500,
        'width' => 500,
        'flex_width' => true,
        'flex_height' => true,
    )));

    $wp_customize->add_setting('intact-reviews-box1-author');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box1-author-control', array(
        'label' => __('1st box review authors name and lastname'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box1-author',
    )));

    $wp_customize->add_setting('intact-reviews-box1-occupation');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box1-occupation-control', array(
        'label' => __('1st box review authors occupation'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box1-occupation',
    )));

    // 2nd box:
    $wp_customize->add_setting('intact-reviews-box2-text');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box2-text-control', array(
        'label' => __('2nd box review text'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box2-text',
        'type' => 'textarea',
    )));

    $wp_customize->add_setting('intact-reviews-box2-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-reviews-box2-image-control', array(
        'label' => __('2nd box photo'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box2-image',
        'height' => 500,
        'width' => 500,
        'flex_width' => true,
        'flex_height' => true,
    )));

    $wp_customize->add_setting('intact-reviews-box2-author');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box2-author-control', array(
        'label' => __('2nd box review authors name and lastname'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box2-author',
    )));

    $wp_customize->add_setting('intact-reviews-box2-occupation');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box2-occupation-control', array(
        'label' => __('2nd box review authors occupation'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box2-occupation',
    )));

    // 3rd box:
    $wp_customize->add_setting('intact-reviews-box3-text');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box3-text-control', array(
        'label' => __('3rd box review text'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box3-text',
        'type' => 'textarea',
    )));

    $wp_customize->add_setting('intact-reviews-box3-image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-reviews-box3-image-control', array(
        'label' => __('3rd box photo'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box3-image',
        'height' => 500,
        'width' => 500,
        'flex_width' => true,
        'flex_height' => true,
    )));

    $wp_customize->add_setting('intact-reviews-box3-author');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box3-author-control', array(
        'label' => __('3rd box review authors name and lastname'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box3-author',
    )));

    $wp_customize->add_setting('intact-reviews-box3-occupation');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-reviews-box3-occupation-control', array(
        'label' => __('3rd box review authors occupation'),
        'section' => 'intact-reviews-section',
        'settings' => 'intact-reviews-box3-occupation',
    )));
 
}

add_action('customize_register', 'intact_reviews');

// CONTACT US:
function intact_contacts($wp_customize){
    $wp_customize->add_section('intact-contacts-section', array(
        'title' => 'Edit: Contacts',
        'description' => 'This section can be found in the Contact Us / Join us page, bellow the contact form, under the heading "Or contact us directly"'
    ));

    // 1st BOX:
    $wp_customize->add_setting('intact-contacts-box1-image');

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-contacts-box1-image-control', array(
        'label' => __('1st box photo'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box1-image',
        'height' => 450,
        'width' => 1000,
        'flex_width' => true,
        'flex_height' => true,

    )));

    $wp_customize->add_setting('intact-contacts-box1-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box1-title-control', array(
        'label' => __('1st box title'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box1-title',
    )));

    $wp_customize->add_setting('intact-contacts-box1-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box1-text-control', array(
        'label' => __('1st box text'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box1-text',
        'type' => 'textarea',
    )));

    // 2nd BOX:
    $wp_customize->add_setting('intact-contacts-box2-image');

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-contacts-box2-image-control', array(
        'label' => __('2nd box photo'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box2-image',
        'height' => 450,
        'width' => 1000,
        'flex_width' => true,
        'flex_height' => true,

    )));

    $wp_customize->add_setting('intact-contacts-box2-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box2-title-control', array(
        'label' => __('2nd box title'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box2-title',
    )));

    $wp_customize->add_setting('intact-contacts-box2-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box2-text-control', array(
        'label' => __('2nd box text'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box2-text',
        'type' => 'textarea',
    )));

    // 3rd BOX:
    $wp_customize->add_setting('intact-contacts-box3-image');

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-contacts-box3-image-control', array(
        'label' => __('3rd box photo'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box3-image',
        'height' => 450,
        'width' => 1000,
        'flex_width' => true,
        'flex_height' => true,

    )));

    $wp_customize->add_setting('intact-contacts-box3-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box3-title-control', array(
        'label' => __('3rd box title'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box3-title',
    )));

    $wp_customize->add_setting('intact-contacts-box3-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box3-text-control', array(
        'label' => __('3rd box text'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box3-text',
        'type' => 'textarea',
    )));

    // 4th BOX:
    $wp_customize->add_setting('intact-contacts-box4-image');

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'intact-contacts-box4-image-control', array(
        'label' => __('4th box photo'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box4-image',
        'height' => 450,
        'width' => 1000,
        'flex_width' => true,
        'flex_height' => true,

    )));

    $wp_customize->add_setting('intact-contacts-box4-title');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box4-title-control', array(
        'label' => __('4th box title'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box4-title',
    )));

    $wp_customize->add_setting('intact-contacts-box4-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-contacts-box4-text-control', array(
        'label' => __('4th box text'),
        'section' => 'intact-contacts-section',
        'settings' => 'intact-contacts-box4-text',
        'type' => 'textarea',
    )));
}

add_action('customize_register', 'intact_contacts');

function intact_footer($wp_customize) {
    $wp_customize->add_section('intact-footer-section',array(
        'title' => 'Edit: Footer'
    ));

    $wp_customize->add_setting('intact-footer-logo');

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'intact-footer-logo-control', array(
        'label' => 'Logo Image File',
        'section' => 'intact-footer-section',
        'settings' => 'intact-footer-logo',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting('intact-footer-text');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intact-footer-text-control', array(
        'label' => 'Footer text',
        'section' => 'intact-footer-section',
        'settings' => 'intact-footer-text',
        'type' => 'textarea'
    )));
}

add_action('customize_register', 'intact_footer');
?>