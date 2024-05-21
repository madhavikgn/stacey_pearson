<?php

    // General Settings Menu Tab
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'  => 'General Settings',
            'menu_title'  => 'General Settings',
            'menu_slug'   => 'theme-general-settings',
            'capability'  => 'edit_posts',
            'redirect'    => false
        ));  
    }

    // Access SVG upload
    function my_custom_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
    }
    define('ALLOW_UNFILTERED_UPLOADS', true);
    add_filter('upload_mimes', 'my_custom_mime_types');
    
?>