<?php

    /**
     * Enqueue scripts and styles.
     */
    function stacey_pearson_scripts() {
        wp_enqueue_style( 'stacey_pearson-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_style_add_data( 'stacey_pearson-style', 'rtl', 'replace' );
        wp_enqueue_style('stacey_pearson-modal-css', get_template_directory_uri() . '/css/jquery.modal.min.css');
        wp_enqueue_style('stacey_pearson-main-css', get_template_directory_uri() . '/scss/main.css');
        wp_enqueue_style('stacey_pearson-custom-css', get_template_directory_uri() . '/css/custom.css');
        wp_enqueue_style('stacey_pearson-aos-css', get_template_directory_uri() . '/css/aos.css');
        wp_enqueue_style('stacey_pearson-slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css');  
        wp_enqueue_style('stacey_pearson-slick-css', get_template_directory_uri() . '/css/slick.css');

        wp_enqueue_script( 'stacey_pearson-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
        wp_enqueue_script('jquery');
        wp_enqueue_script('stacey_pearson-aos-js', get_template_directory_uri() . '/js/aos.js');
        wp_enqueue_script('selma-gsap-min', get_template_directory_uri() . '/js/gsap.min.js', array(), _S_VERSION, true);        
        wp_enqueue_script('stacey-modal-js', get_template_directory_uri() . '/js/jquery.modal.min.js', array(), _S_VERSION, true);
        wp_enqueue_script('semla-ScrollTrigger-min', get_template_directory_uri() . '/js/ScrollTrigger.min.js', array(), _S_VERSION, true);
        wp_enqueue_script('semla-ScrollSmoother-min', get_template_directory_uri() . '/js/ScrollSmoother.min.js', array(), _S_VERSION, true);	
        wp_enqueue_script('stacey_pearson-slick-js', get_template_directory_uri() . '/js/slick.js');
        wp_enqueue_script('stacey_pearson-custom-js', get_template_directory_uri() . '/js/custom.js');

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        } 
    }
    add_action( 'wp_enqueue_scripts', 'stacey_pearson_scripts' );

?>