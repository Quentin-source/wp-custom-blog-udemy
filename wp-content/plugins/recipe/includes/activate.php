<?php

function r_activate_plugin()
{
    //check if is the good version of wordpress
    if (!version_compare(get_bloginfo("version"), "5.0", ">")) {
        wp_die("You must update WordPress to activate this plugin", "Recipe");
    };

    //create a new database for our plugins whiwh will contain all the rates
    global $wpdb;
    $createSQL = "
    CREATE TABLE `" . $wpdb->prefix . "recipe_ratings` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `recipe_id` BIGINT(20) UNSIGNED NOT NULL,
        `rating` FLOAT(3,2) UNSIGNED NOT NULL,
        `user_ip` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB ". $wpdb->get_charset_collate() .";
    ";

      require(ABSPATH . "/wp-admin/includes/upgrade.php");  //only when modify the database is required
      dbDelta($createSQL);
};
