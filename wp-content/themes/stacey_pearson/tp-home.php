<?php
    /* Template Name: Home Page */
    get_header();
    $placeholder_image = get_field('placeholder_image', 'option');
?>

<section class="home-main">
    <!-- Banner Section -->
    <?php
        $images_with_details = get_field('images_with_details');
    ?>
    <div class="banner-slider">
        <div class="home-slider">
            <?php foreach($images_with_details as $images_with_detail){ ?>
                <div class="item">
                    <figure>
                        <img src="<?php echo $images_with_detail['image']['url']; ?>" alt="<?php echo $images_with_detail['image']['alt']; ?>" />
                    </figure>           
                    <div class="content">
                        <div class="container">
                            <div class="item-content"  data-aos="fade-left" data-aos-duration="1000">
                                <h2 class="slide-name"><?php echo $images_with_detail['name']; ?></h2>
                                <ul>
                                    <li><?php echo $images_with_detail['location']; ?></li>
                                    <li><?php echo $images_with_detail['year']; ?></li>
                                    <li><?php echo $images_with_detail['size']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div data-role="scroll-button" class="circle-logo"></div>
    </div>

    <!-- Gallery Section -->
    <?php
        $gallery_details = get_field('gallery_details');
        if(!empty($gallery_details))
        {
    ?>
            <div class="gallery-section">
                <div class="container">
                    <ul>
                        <?php
                            foreach($gallery_details as $index => $gallery_detail)
                            {
                        ?>
                                <li data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                                    <a href="#gallery-view-<?php echo $index; ?>" rel="modal:open" alt="<?php echo $gallery_detail['category_name']; ?>">
                                        <figure>
                                            <img src="<?php echo $gallery_detail['image']; ?>" alt="<?php echo $gallery_detail['category_name']; ?>"/>
                                        </figure>
                                    </a>
                                    <h2 class="gallery-name">
                                        <a href="#gallery-view-<?php echo $index; ?>" rel="modal:open" alt="<?php echo $gallery_detail['category_name']; ?>">
                                            <?php echo $gallery_detail['category_name']; ?>
                                        </a>
                                    </h2>
                                </li>                                                              
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
    <?php
        }
    ?>
    <!-- Gallery Popup -->
    <?php
        foreach($gallery_details as $index => $gallery_detail)
        {            
            $popup_images_details = $gallery_detail['popup_images_detail'];
            $contact_button_text_popup = get_field('contact_button_text_popup', 'option');
    ?>
            <div id="gallery-view-<?php echo $index; ?>" class="gallery-view modal">
                <div class="mainpopup">
                    <div class="topbar">
                        <a href="javascript:;" class="back-arrow"><img src="<?php echo get_template_directory_uri();?>/images/arrow-back.svg" loading="lazy" height="100%" width="100%" alt="arrow-back" title="arrow-back" />  Back to categories</a>
                        <a href="javascript:;" class="backlink"><?php echo $contact_button_text_popup; ?></a>                        
                    </div>        
                    <div class="popupslider">
                        <?php
                            foreach($popup_images_details as $popup_images_detail)
                            {
                        ?>
                                <div class="imagebox">
                                    <img src="<?php echo $popup_images_detail['image']; ?>" loading="lazy" height="100%" width="100%" alt="big-img" title="big-img" /> 
                                    <div class="contentbox">
                                        <h2><?php echo $gallery_detail['category_name']; ?></h2>
                                        <div class="details">
                                            <div>
                                                <span>Name</span> 
                                                <p><?php echo $popup_images_detail['place_name']; ?></p>
                                            </div> 
                                            <div>
                                                <span>Size</span> 
                                                <p><?php echo $popup_images_detail['size']; ?></p>
                                            </div>
                                            <div>
                                                <span>Edition</span> 
                                                <p><?php echo $popup_images_detail['edition']; ?></p>
                                            </div>
                                        </div>
                                        <a href="javascript:" class="backlink"><?php echo $contact_button_text_popup; ?></a>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="sync-slider">
                        <?php
                            foreach($popup_images_details as $popup_images_detail)
                            {
                        ?>
                                <div class="innerslider">
                                    <img src="<?php echo $popup_images_detail['image']; ?>" loading="lazy" height="100%" width="100%" alt="slide2" title="slide2" /> 
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
    <?php } ?>
  

    <!-- About Section -->
    <?php
        $about_sec_image = get_field('about_sec_image');
        $about_sec_logo = get_field('about_sec_logo');
        $about_sec_title = get_field('about_sec_title');
        $about_sec_content = get_field('about_sec_content');
        if( (!empty($about_sec_image)) || (!empty($about_sec_logo)) || (!empty($about_sec_title)) || (!empty($about_sec_content)) )
        {
    ?>
            <div class="about-us-section">
                <div class="container">
                    <div class="content-outer">
                        <div class="stacey-image" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">               
                            <figure>
                                <?php if(!empty($about_sec_image)){ ?>
                                    <img src="<?php echo $about_sec_image['url']; ?>" alt="<?php echo $about_sec_image['alt']; ?>"/>
                                <?php }else{ ?>
                                    <img src="<?php echo $placeholder_image['url']; ?>" alt="<?php echo $placeholder_image['alt']; ?>"/>
                                <?php } ?>
                            </figure>
                        </div>
                        <div class="stacey-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                            <?php if(!empty($about_sec_logo)){ ?>
                                <div class="stacey-icon">
                                    <img src="<?php echo $about_sec_logo['url']; ?>" alt="<?php echo $about_sec_logo['alt']; ?>"/>
                                </div>
                            <?php } ?>
                            <?php if(!empty($about_sec_title)){ ?>
                                <h1><?php echo $about_sec_title; ?></h1>
                            <?php } ?>
                            <?php if(!empty($about_sec_content)){ ?>
                                <?php echo $about_sec_content; ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>

    <!-- Event Section -->
    <?php
        $event_details = get_field('event_details');
        if(!empty($event_details))
        {
    ?>
            <div class="event-section">
                <div class="container">
                    <div class="event-slider" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <?php foreach($event_details as $event_detail){ ?>
                            <div class="item">
                                <div class="eventdetails">
                                    <div class="event-content">
                                        <h1><?php echo $event_detail['title']; ?></h1>
                                        <h2><?php echo $event_detail['sub_title']; ?></h2>
                                        <hr/>
                                        <p><?php echo $event_detail['content']; ?></p>
                                        <div class="link">
                                            <a href="<?php echo $event_detail['button_url']; ?>" target="_blank"><?php echo $event_detail['button_text']; ?></a>
                                        </div>
                                    </div>
                                    <div class="event-image">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/event-image.jpg" alt="Event Image"/>
                                        </figure>
                                    </div>
                                </div>
                                <hr/>
                            </div>   
                        <?php } ?>                     
                    </div>
                </div>
            </div>
    <?php
        }
    ?>

    <!-- Instagram Section -->
    <?php    
        $account_name = get_field('account_name');
        $account_url = get_field('account_url');
        $instagram_feed = get_field('instagram_feed');
        if(!empty($instagram_feed))
        {
    ?>
            <div class="instagram-section">
                <div class="container">
                    <?php echo do_shortcode($instagram_feed); ?>
                    <?php if( (!empty($account_name)) && (!empty($account_url)) ){ ?>
                        <div class="instaname" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
                            <a href="<?php echo $account_url; ?>" target="_blank"><?php echo $account_name; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
    <?php
        }
    ?>

    <!-- Contact Form Popup -->
    <?php
        $contact_form_title = get_field('contact_form_title', 'option');
        $contact_form = get_field('contact_form', 'option');
    ?>
    <div id="contact-modal" class="modal contact-modal">
        <div class="modalcontent">
            <h1><?php echo $contact_form_title; ?></h1>
            <?php echo do_shortcode($contact_form); ?>
        </div>  
    </div>

    <!-- Thankyou Popup -->
    <?php
        $after_form_submit_text = get_field('after_form_submit_text', 'option');
    ?>
    <div id="thankyou-modal" class="modal contact-modal">
        <div class="modalcontent">
            <?php echo $after_form_submit_text; ?>
        </div>  
    </div>

</section>

<?php
    get_footer();
?>


<script>
    jQuery(document).ready(function(){  
        // Thankyou Popup Script                 
        jQuery(document).on('wpcf7mailsent', function(){
            // setTimeout(() => {         
                jQuery('#contact-modal').modal({
                    closeExisting: false
                });
            // }, 2500);
        });

        // Gallery popup Inquire button click to open contact form
        jQuery('.topbar .backlink').on('click', function(){
            jQuery('#contact-modal').modal({
                closeExisting: false
            });
        });

        // Gallery popup Back arrow button to close popup
        jQuery('.topbar .back-arrow').on('click', function(){
            jQuery('.jquery-modal').hide();
        });
    });
</script>