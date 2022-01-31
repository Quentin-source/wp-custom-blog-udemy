<?php

function r_recipe_admin_init() {

    include('columns.php');
    //filter that care to display custom colons title
    add_filter('manage_recipe_posts_columns','r_add_new_recipe_columns');

    //action of displaying the meta values in the custom colons of admin section
    add_action('manage_recipe_posts_custom_column','r_manage_recipe_columns', 10, 2);
}