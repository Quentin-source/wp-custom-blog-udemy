<?php
// wp back side fucntion receiving the ajax request and handle it
function r_rate_recipe()
{
    global $wpdb;

    $post_ID = absint($_POST['rid']);
    $rating = round($_POST['rating'], 1);
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $output = ['status' => 1];

    //check if user already have a row in database
    $rating_count = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "recipe_ratings` WHERE recipe_id ='" . $post_ID . "' AND user_ip='" . $user_ip . "'"
    );
    //if so replace the row in dd
    if ($rating_count > 0) {

        $get_id = $wpdb->get_var(
            "SELECT `ID` FROM `" . $wpdb->prefix . "recipe_ratings` WHERE recipe_id ='" . $post_ID . "' AND user_ip='" . $user_ip . "'"
        );
        // wp_send_json($output); //exit 

        $wpdb->update(
            $wpdb->prefix . 'recipe_ratings',
            [
                'recipe_id' => $post_ID,
                'rating' => $rating,
                'user_ip' => $user_ip
            ],
            ['ID' => $get_id],
            [
                '%d', '%f', '%s'
            ],
            ['%d']
        );
    } else {

        //if not insert a nex rate into the db related to the ip adress
        $wpdb->insert(
            $wpdb->prefix . 'recipe_ratings',
            [
                'recipe_id' => $post_ID,
                'rating' => $rating,
                'user_ip' => $user_ip
            ],
            [
                '%d', '%f', '%s'
            ]
        );
    };
    // here we store the recipe related metadata due to the new noation
    //first get the metadata
    $recipe_data = get_post_meta($post_ID, 'recipe_data', true);
    // increment the number of notes
    $recipe_data['rating_count'] = $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "recipe_ratings`;"
    );;
    //get the average of all the affected notes 
    $recipe_data['rating'] = round($wpdb->get_var(
        "SELECT AVG(`rating`) FROM `" . $wpdb->prefix . "recipe_ratings` WHERE recipe_id ='" . $post_ID . "';"
    ), 1);

    //finally write the metadata into the recipe post
    update_post_meta($post_ID, 'recipe_data', $recipe_data);

    //and set the response to 2 success
    $output['status'] = 2;
    wp_send_json($output);
}
