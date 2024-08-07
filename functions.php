
<?php

/*
    add custom style
*/

function bootstrap_styles(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css');
}  ;


function bootstrap_scripts(){
    /*
    *******
        ######---------- !Important -----------##########
        in array i add jquery which is  registered in wordpress using wp_register_script
        ###########################################
    *******
    */
    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), false, true);
}  ;


add_action('wp_enqueue_scripts', 'bootstrap_styles');
add_action('wp_enqueue_scripts', 'bootstrap_scripts');
