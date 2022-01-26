<?php

function ju_widgets(){

    register_sidebar([
        "name"=> __("My First Theme Sidebar", "wp-custom-blog-udemy"),
        "id"=> "ju_sidebar",
        "description"=> __("Sidebar for the theme Udemy","wp-custom-blog-udemy"),
        "before_widget"=>'<div id="%1$s" class="widget cleafix %2$s">',
        "after_widget"=>'</div>',
        "before_title"=>'<h4>',
        "after_title"=>'</h4>',
    ]);

};