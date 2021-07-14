<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}



function load_stylesheets(){

    wp_register_style('fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style('fontawesome');



    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),2,'all');
    wp_enqueue_style('styles');

    wp_register_style('modal',get_template_directory_uri() . '/css/modal.css',array(),2,'all');
    wp_enqueue_style('modal');

    wp_register_style('hover',get_template_directory_uri() . '/css/hover.css',array(),1,'all');
    wp_enqueue_style('hover');

    wp_register_style('animate',get_template_directory_uri() . '/css/animate.min.css',array(),1,'all');
    wp_enqueue_style('animate');

    wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel');

    wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel-theme');


}
add_action('wp_enqueue_scripts','load_stylesheets');







//load scripts
function addjs()
{

    wp_register_script('captcha','https://www.google.com/recaptcha/api.js');
    wp_enqueue_script('captcha');


    wp_register_script('j-q-u-er-y',get_template_directory_uri() . '/js/jquery-3.1.0.min.js',array(),1,1,1);
    wp_enqueue_script('jquery');



    wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('OwlCarousel');


    wp_register_script('modal',get_template_directory_uri() . '/js/modal.js',array(),1,1,1);
    wp_enqueue_script('modal');

    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');




}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'GDC' ),
        'footer-menu' => __('Footer Menu')
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}





function soroush() {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'sorushabdoli@gmail.com';
    $subject = "Report";
    $message = "salam";
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $message,$headers);
    wp_send_json($m);



    exit();





}
add_action('wp_ajax_soroush', 'soroush');
add_action("wp_ajax_nopriv_soroush", 'soroush');


function download() {

	
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
  
    $to = 'sorushabdoli@gmail.com';
    $subject = "Report";
    $message = "salam";
    $headers = array('Content-Type: text/html; charset=UTF-8','From:'.$email,'Cc:  rajabitr@gmail.com');
    $m = wp_mail($to, $subject, $message,$headers);
    wp_send_json($name);
	



    exit();

}
add_action('wp_ajax_download', 'download');
add_action("wp_ajax_nopriv_download", 'download');

