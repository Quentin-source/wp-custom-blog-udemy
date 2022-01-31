<?php

/* 
Plugin Name: Recipe
Description: A simple WordPress plugin that allows user to create recipes and rate those recipes
Version: 1.0
Author: Quentin Source
text domain: recipe
*/

// Security check if the function add_action doesn't exist (WP fundamental) it mean WP is not running
if (!function_exists('add_action')) {
    echo "This plugins require Wordpress to run!";
    exit;
};

//Setup
define('RECIPE_PLUGIN_URL', __FILE__);



//Includes
include('includes/activate.php');
include("includes/init.php");
include("includes/front/enqueue.php");
include("process/save-post.php");
include("process/filter-content.php");
include("process/rate-recipe.php");
include("includes/admin/init.php");



//Hooks

//when the plugin is activate
register_activation_hook(__FILE__, "r_activate_plugin");

//Fires after WordPress has finished loading but before any headers are sent.
add_action("init", "recipe_init");

// when a recipe post type is saved
add_action("save_post_recipe", 'r_save_post_admin', 10, 3);

//when the content is displayed
add_filter("the_content", "r_filter_recipe_content");

//when scripts and styles are loaded
add_action("wp_enqueue_scripts", "r_enqueue", 100);

//when an ajax request is send
add_action('wp_ajax_r_rate_recipe', 'r_rate_recipe');
add_action('wp_ajax_nopriv_r_rate_recipe', 'r_rate_recipe');

//when the admin init
add_action('admin_init', 'r_recipe_admin_init');



//Shortcodes