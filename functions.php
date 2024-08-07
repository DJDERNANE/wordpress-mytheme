
<?php

/*
    add custom style
*/

function bootstrap_style(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css')
}  


function bootstrap_scripts(){
    wp_enqueue_style('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true)
}  