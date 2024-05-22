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

    // Prevent from spam for cf7 form
    add_filter('wpcf7_spam', 'validate_spam', 10, 2);
    function validate_spam($is_spam, $cf7_submission)
    {
        if ($is_spam) {
            //you can inspect the spam log to see what went wrong,
            $array = $cf7_submission->get_spam_log();
            //and determine if the submission is valid,
            $is_spam = false;
        }
        return $is_spam;
    }
    
?>