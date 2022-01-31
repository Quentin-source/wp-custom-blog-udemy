<?php

function r_filter_recipe_content($content)
{
    // we check if is a post type recipe and a single page here
    if (!is_singular("recipe")) return $content;

    global $post, $wpdb;
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $recipe_data = get_post_meta($post->ID, "recipe_data", true);
    $recipe_html = file_get_contents('recipe-template.php', true);
    $recipe_html = str_replace('RATE_I18N', __("Rating", "recipe"), $recipe_html);
    $recipe_html = str_replace('RECIPE_ID', $post->ID, $recipe_html);
    $recipe_html = str_replace('RECIPE_RATING', $recipe_data['rating'], $recipe_html);

    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "recipe_ratings` WHERE recipe_id ='" . $post->ID . "' AND user_ip='" . $user_ip . "'"
    );

    // if ($rating_count > 0) {
    //     $recipe_html = str_replace('READONLY_PLACEHOLDER', 'data-rateit-readonly="true"', $recipe_html);
    // } else {
    //     $recipe_html = str_replace('READONLY_PLACEHOLDER', '', $recipe_html);
    // }


    return $recipe_html . $content;
}
