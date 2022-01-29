<?php

function ju_social_customizer_section($wp_customize)
{

    $wp_customize->add_section("ju_social_section", [
        "title" => __("Udemy Social Settings", "wp-custom-blog-udemy"),
        "priority" => 30,

    ]);

    $wp_customize->add_setting("ju_facebook_handle", [
        "default" => ""
    ]);

    $wp_customize->add_setting("ju_twitter_handle", [
        "default" => ""
    ]);

    $wp_customize->add_setting("ju_instagram_handle", [
        "default" => ""
    ]);

    $wp_customize->add_setting("ju_phone_handle", [
        "default" => ""
    ]);

    $wp_customize->add_setting("ju_email_handle", [
        "default" => ""
    ]);


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "ju_social_facebook_input",
        [
            "label" => __("Facebook Handle", "wp_custom_blog_udemy"),
            "section" => "ju_social_section",
            "settings" => "ju_facebook_handle",
            "type" => "text",
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "ju_social_twitter_input",
        [
            "label" => __("Twitter Handle", "wp_custom_blog_udemy"),
            "section" => "ju_social_section",
            "settings" => "ju_twitter_handle",
            "type" => "text",
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "ju_social_instagram_input",
        [
            "label" => __("Instagram Handle", "wp_custom_blog_udemy"),
            "section" => "ju_social_section",
            "settings" => "ju_instagram_handle",
            "type" => "text",
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "ju_social_phone_input",
        [
            "label" => __("Phone Number Handle", "wp_custom_blog_udemy"),
            "section" => "ju_social_section",
            "settings" => "ju_phone_handle",
            "type" => "text",
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "ju_social_email_input",
        [
            "label" => __("Email Handle", "wp_custom_blog_udemy"),
            "section" => "ju_social_section",
            "settings" => "ju_email_handle",
            "type" => "text",
        ]
    ));
}
