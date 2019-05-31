<?php
/**
* 7s Hide Registration Fields
*
* @package 7s_hide_registration_fields
* @author AT Consulting
*/

elgg_register_event_handler('init', 'system', 'hidefields_init');

function hidefields_init() {
    $action_path = elgg_get_plugins_path() . "7s_hide_registration_fields/actions/register.php";
    elgg_register_action("register", $action_path, 'public');
    elgg_register_page_handler('register', 'hidefields_page_handler');
}

function hidefields_page_handler() {
    $content = elgg_view_form('register');
    $params = array(
        'title' => '',
        'filter' => '',
        'content' => $content
    );

    $body = elgg_view_layout('one_column', $params);
    
    echo elgg_view_page('', $body);
    return TRUE;
}