jQuery( document ).ready(function() {

  setTimeout(() => {
    AOS.init({
        offset: 200,
    });
  }, 120);

    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    //Smooth Scroll
    const smoother = ScrollSmoother.create({
        smooth: 2,
        effects: true,
        smoothTouch: 5,
    });   
   

    jQuery(".close").click(function(){
        jQuery(".announcement-bar").slideUp();
    });  
    
    jQuery(".circle-logo").click(function() {
      jQuery('html, body').animate({
          scrollTop: jQuery(".gallery-section").offset().top
      }, 500);
    });
    function sliderInit() {
        var $slider = jQuery(".home-slider");
        $slider.each(function () {          
          jQuery(this).slick({
            arrows: false,
            dots: true,
            infinite: false,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            autoplay: false,
            cssEase: "ease-in-out",
            touchThreshold: 100,                       
          }); 
          jQuery(this).on('afterChange', function(event, slick, currentSlide) {
            jQuery('.item-content').removeClass("aos-animate");
            jQuery('.item-content').addClass("aos-animate");
          });
        });
    }
      sliderInit();
      //Photo View Combine Slider //
      jQuery('.popupslider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.sync-slider'
      });
      jQuery('.sync-slider').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.popupslider',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 4,
            }                
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            centerPadding:"20px"
          }                
        }
      ]
      });

      jQuery(".gallery-section ul li a").click(function(){        
        jQuery(".sync-slider .slick-arrow").trigger("click");
      });  

      jQuery('.event-slider').slick({
        arrows: true,
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 1.33,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: true,
        centerPadding: '0',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                  slidesToShow: 1.35,
                }                
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
              }                
          }
        ]
    });

    jQuery('.sync-slider .slick-prev').hover(
      function(){ jQuery(".next-prev").toggleClass('cursorprev') },
    )
    jQuery('.sync-slider .slick-next').hover(
      function(){ jQuery(".next-prev").toggleClass('cursornext') },
    )

    // Thankyou Popup                 
    jQuery(document).on('wpcf7mailsent', function(){
      jQuery('#contact-modal').modal('hide');
      jQuery('#thankyou-modal').modal('show');                

      // Refresh the form
      var form = jQuery('form.wpcf7-form');
      form[0].reset();
    });

    // Gallery popup Inquire button click to open contact form
    jQuery('.topbar .backlink').on('click', function(){
      jQuery('#contact-modal').modal('show');
    });

    // Gallery popup Back arrow button to close popup
    jQuery('.topbar .back-arrow').on('click', function(){
      jQuery('.jquery-modal').hide();
    });
});


