<?php
if ( has_custom_logo() ) {
    // Use WordPress Custom Logo if set
    the_custom_logo();
} else {
    // Fallback logo from theme folder
    $logo_url = get_template_directory_uri() . '/assets/images/logo.png';
    echo '<a href="' . esc_url(home_url('/')) . '">';
    echo '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
    echo '</a>';
}
?>
