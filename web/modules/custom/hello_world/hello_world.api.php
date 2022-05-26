<?php

/**
 * @file
 * Hooks for module Hello World.
 */

/**
 * Adds messages to page.
 * 
 * @return string|array
 *  Returns string or array of strings with additional messages.
 */
function hook_hello_world_page_message() {
    return [
        'First message',
        'Second message',
    ];
}

/**
 * Alter massages being added to page.
 * 
 * @param array $messages
 *  Array with messages.
 */
function hook_hello_world_page_messages_alter(&$messages) {
    $messages[0] = 'Replaced!';
}