<?php
/*
Plugin Name: Custom Avatar Filter
Plugin URI: https://1xn.org
Description: Replace user avatars with custom images based on username. It searches the gallery for username.jpg and replaces the avatar.
Version: 1.0
Author: 1xN
Author URI: https://1xn.org
License: GPL2
*/
add_filter('get_avatar_data', 'ht1_change_avatar', 100, 2);

function ht1_change_avatar($args, $id_or_email) {
    $user_id = false;
    if (is_numeric($id_or_email)) {
        $user_id = (int) $id_or_email;
    } elseif (is_string($id_or_email) && ($user = get_user_by('email', $id_or_email))) {
        $user_id = $user->ID;
    } elseif (is_object($id_or_email) && !empty($id_or_email->user_id)) {
        $user_id = (int) $id_or_email->user_id;
    }

    if (!$user_id) {
        return $args;
    }

    $user = get_user_by('ID', $user_id);

    if ($user && isset($user->user_login)) {
        $username = $user->user_login;
        $file_url = wp_get_attachment_url(get_user_meta($user_id, 'custom_avatar', true));
        if ($file_url) {
            $args['url'] = $file_url;
        } else {
            $args['url'] = "https://example.com/wp-content/uploads/{$username}.jpg";
        }
    }

    return $args;
}

?>
