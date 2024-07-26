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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="go-down">
            <div data-role="scroll-button" class="circle-logo"></div>
        </div>
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
                                    <h2 class="gallery-name" data-aos="fade-up" data-aos-duration="1000">
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
                        <a href="javascript:;" class="back-arrow">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/images/arrow-back.svg" loading="lazy" height="100%" width="100%" alt="arrow-back" title="arrow-back" />   -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                <g id="Group_127" data-name="Group 127" transform="translate(-36 -27)">
                                    <path id="Path_170" data-name="Path 170" d="M0,0,4.25,4.25,8.5,0" transform="translate(60.061 44.907) rotate(90)" fill="none" stroke="#fff" stroke-width="1"/>
                                    <g id="Ellipse_15" data-name="Ellipse 15" transform="translate(80 27) rotate(90)" fill="none" stroke="#fff" stroke-width="1">
                                    <circle cx="22" cy="22" r="22" stroke="none"/>
                                    <circle cx="22" cy="22" r="21.5" fill="none"/>
                                    </g>
                                </g>
                            </svg> -->
                            <span class="backicon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5.311" height="9.207" viewBox="0 0 5.311 9.207">
                                    <path id="Path_170" data-name="Path 170" d="M0,0,4.25,4.25,8.5,0" transform="translate(4.958 0.354) rotate(90)" fill="none" stroke="#fff" stroke-width="1"/>
                                </svg>
                            </span>
                            Back to categories</a>
                        <a href="javascript:;" class="backlink"><?php echo $contact_button_text_popup; ?></a>                        
                    </div>        
                    <div class="popupslider">
                        <?php
                            foreach($popup_images_details as $popup_images_detail)
                            {
                        ?>
                                <div class="imagebox">
                                    <img src="<?php echo $popup_images_detail['image']; ?>" loading="lazy" height="100%" width="100%" alt="big-img" title="big-img" /> 
                                    <div class="contentbox" style="display:none;">
                                        <h2><?php echo $gallery_detail['category_name']; ?></h2>
                                        <div class="details">
                                            <div>
                                                <span>Name</span> 
                                                <p><?php echo $popup_images_detail['place_name']; ?></p>
                                            </div> 
                                            <div>
                                                <span>Location</span> 
                                                <p><?php echo $popup_images_detail['size']; ?></p>
                                            </div>
                                            <div>
                                                <span>Year</span> 
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
                    <a href="javascript:;" class="next-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="165" viewBox="0 0 45 165">
                        <g id="Group_127" data-name="Group 127" transform="translate(-1327.5 -735.5)">
                            <path id="Path_167" data-name="Path 167" d="M0,0,4.25,4.25,8.5,0" transform="translate(1352.061 753.907) rotate(90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                            <circle id="Ellipse_11" data-name="Ellipse 11" cx="22" cy="22" r="22" transform="translate(1372 736) rotate(90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                            <circle transform="translate(1372 736) rotate(180)" class="another-circle" cx="22" cy="-22" r="22" fill="transparent" stroke="#e1ccbf" stroke-width="1.5" />
                            <line id="Line_137" data-name="Line 137" y2="63" transform="translate(1350.339 837.5)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                            <line id="Line_138" data-name="Line 138" y2="14" transform="translate(1350.339 780.5)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                            <circle id="Ellipse_8" data-name="Ellipse 8" cx="22" cy="22" r="22" transform="translate(1328 838) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                            <circle transform="translate(1372 736) rotate(0)" class="another-circle-next" cx="-22" cy="80" r="22" fill="transparent" stroke="#e1ccbf" stroke-width="1.5" />
                            <path id="Path_166" data-name="Path 166" d="M0,0,4.25,4.25,8.5,0" transform="translate(1348.214 820.369) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                        </g>
                    </svg>
                    </a>
                </div>
                <?php  include 'footer-popup.php';?>
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
                    <div class="btn-wrap">
                        <a href="javascript:;" class="prev-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61">
                                <g id="Group_124" data-name="Group 124" transform="translate(-998.5 -2901.5)">
                                    <path id="Path_168" data-name="Path 168" d="M-8393.963,3931.66l6.543,6.542,6.542-6.542" transform="translate(-2905.514 -5456.255) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                                    <circle id="Ellipse_12" data-name="Ellipse 12" cx="30" cy="30" r="30" transform="translate(999 2962) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                                    <circle transform="translate(999 2962) rotate(0)" class="another-circle" cx="30" cy="-30" r="30" fill="transparent" stroke="#e1ccbf" stroke-width="1.5" />
                                </g>
                            </svg>
                        </a>
                        <a href="javascript:;" class="next-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61">
                                <g id="Group_124" data-name="Group 124" transform="translate(-998.5 -2901.5)">
                                    <path id="Path_168" data-name="Path 168" d="M-8393.963,3931.66l6.543,6.542,6.542-6.542" transform="translate(-2905.514 -5456.255) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                                    <circle id="Ellipse_12" data-name="Ellipse 12" cx="30" cy="30" r="30" transform="translate(999 2962) rotate(-90)" fill="none" stroke="#e1ccbf" stroke-width="1"/>
                                    <circle transform="translate(999 2962) rotate(0)" class="another-circle" cx="30" cy="-30" r="30" fill="transparent" stroke="#e1ccbf" stroke-width="1.5" />
                                </g>
                            </svg>
                        </a>
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