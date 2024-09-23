<?php
/**
 * add logo in wordpress
 */
function moashqar_after_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' =>  60,
        'width' =>  60,
        'flex-height' =>  false,
        'flex-width' =>  false,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    ));
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'moashqar_after_setup_theme');

// add mune in theme wordpress
function moashqar_nav_menu()
{

    register_nav_menu('moashqar-header', 'Header Menu');
}
add_action('init', 'moashqar_nav_menu');

function moashqar_include_assets()
{
    // include bootstrap css.
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), ver: 1.0);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), ver: 1.0);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), ver: 1.0);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), ver: 1.0);
    wp_enqueue_style('theme', get_stylesheet_uri(), array(), ver: 1.0);


    // include js file.
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), ver: 1.0, args: true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), ver: 1.0, args: true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), ver: 1.0, args: true);

//    wp_enqueue_script('theme-function', get_template_directory_uri() . '/assets/js/theme-function.js', array('jquery'), /*filemtime(get_template_directory_uri() . '/assets/js/theme-function.js'),*/ args: true);
//
//    wp_localize_script('theme-function', 'woolearn_data', array(
//        'woolearn_ajax_url' => admin_url('admin-ajax.php'),
//        'posts_per_page' => 8,
//        'texts' => array(
//            'loading' => __('loading' , 'woolearn'),
//            'loadmore' => __('load more', 'woolearn'),
//            'nomoreservices' => __('no more services', 'woolearn'),
//        )
//    ));

//

}
add_action('wp_enqueue_scripts', 'moashqar_include_assets');


// add custom post type services
function woolearn_create_services_post_type()
{
    $labels = array(
        'name'               => __('Services', 'woolearn'),
        'singular_name'      => __('Service', 'woolearn'),
        'add_new'            => __('Add New', 'woolearn'),
        'add_new_item'       => __('Add New Service', 'woolearn'),
        'edit_item'          => __('Edit Services', 'woolearn'),
        'new_item'           => __('New Services', 'woolearn'),
        'view_item'          => __('View Services', 'woolearn'),
        'search_items'       => __('Search Services', 'woolearn'),
        'not_found'          => __('No Services Found', 'woolearn'),
        'not_found_in_trash' => __('NO Services found in trash', 'woolearn'),
        'all_items'          => __('All Services', 'woolearn'),
        'menu_name'          => __('Services', 'woolearn'),

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail'),
        //'show_in_rest' => true,
    );

    register_post_type('service', $args);
}
add_action('init', 'woolearn_create_services_post_type');

function woolearn_register_private_taxonomy() {
    $args = array(
        'label'        => __( 'Service type', 'woolearn' ),
        'public'       => true,
        'hierarchical' => true
    );

    register_taxonomy( 'service_type', 'service', $args );
}
add_action( 'init', 'woolearn_register_private_taxonomy', 0 );

// add custom post type Plans
function woolearn_create_plan_post_type()
{
    $labels = array(
        'name'               => __('Plans', 'woolearn'),
        'singular_name'      => __('Plan', 'woolearn'),
        'add_new'            => __('Add New', 'woolearn'),
        'add_new_item'       => __('Add New Plan', 'woolearn'),
        'edit_item'          => __('Edit Plan', 'woolearn'),
        'new_item'           => __('New Plan', 'woolearn'),
        'view_item'          => __('View Plan', 'woolearn'),
        'search_items'       => __('Search Plans', 'woolearn'),
        'not_found'          => __('No Plans Found', 'woolearn'),
        'not_found_in_trash' => __('NO Plans found in trash', 'woolearn'),
        'all_items'          => __('All Plans', 'woolearn'),
        'menu_name'          => __('Plans', 'woolearn'),

    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'plans'),
        'supports' => array('title', 'editor', 'thumbnail'),
        //'show_in_rest' => true,
    );

    register_post_type('plans', $args);
}
add_action('init', 'woolearn_create_plan_post_type');

function woolearn_register_plan_taxonomy() {
    $args = array(
        'label'        => __( 'Plan Type', 'woolearn' ),
        'public'       => true,
        'hierarchical' => true
    );

    register_taxonomy( 'plan_type', 'plans', $args );
}
add_action( 'init', 'woolearn_register_plan_taxonomy', 0 );


function moashqar_register_meta_box()
{
    $screen = array(
        'post',
        'plan',
    );

    add_meta_box('plan_custom_data' , esc_html__('Plan Data' , 'moashqar'), callback:'moashqar_plan_data_box');

}
add_action('add_meta_boxes', 'moashqar_register_meta_box');


function moashqar_plan_data_box(){
    global $post;
    $plan_price = get_post_meta($post->ID, 'moashqar_plan_price' , true);


    ?>
    <label for="plan_price"> <?php echo  esc_html__('Price' , 'moashqar'); ?></label>
    <input type="number" name="plan_price" id="plan_price" value="<?php echo $plan_price ? intval($plan_price) : 0 ; ?>">
    <?php
}
function moashqar_save_plan_data($post_id)
{
    if (array_key_exists('plan_price', $_POST)) {
        update_post_meta( $post_id, 'moashqar_plan_price', sanitize_text_field($_POST['plan_price']) );
    }
}
add_action('save_post', 'moashqar_save_plan_data');

/**
 * Service Data
 */

function moashqar_get_plan_data(int $plan_id){
    $plan_meta = get_post_meta($plan_id);
    return array(
        'price' => $plan_meta['moashqar_plan_price'][0] ?? '',
        'features' => $plan_meta['moashqar_plan_features'] ?? array(),
    );
}
add_action('get_plan_data', 'moashqar_get_plan_data');


// add functions
require_once get_template_directory() . '/includes/theme-options.php';
//require_once get_template_directory() . '/includes/about-theme-options.php';

