<?php
function at_group_setup() {
    // Adds support for a custom logo via the WordPress Customizer
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'at_group_setup');