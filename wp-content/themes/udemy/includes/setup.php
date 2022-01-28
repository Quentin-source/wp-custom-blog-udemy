<?php

function ju_setup_theme(){
    register_nav_menu("primary",__("Primary Menu","wp-custom-blog-udemy"));
    add_theme_support( 'post-thumbnails' );

}