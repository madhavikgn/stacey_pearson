jQuery( document ).ready(function() {

  jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 700) {
      jQuery(".home-main").addClass("scrolled"); 
    }else{
      jQuery(".home-main").removeClass("scrolled"); 
    }
    
  }); 

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
            autoplay:true,
            autoplaySpeed:3000,
            cssEase: "ease-in-out",
            touchThreshold: 100,  
            responsive: [
              {
                breakpoint: 767,
                settings: {
                  dots: false,
                }                
            },
          ]                     
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
          jQuery("html").addClass("popupopen");
          setTimeout(function(){
            jQuery(".mainpopup .popupslider .imagebox .contentbox").css("display","block");
          },1000)          
        }); 
        jQuery(".back-arrow").click(function(){      
          jQuery("html").removeClass("popupopen");
          jQuery(".mainpopup .popupslider .imagebox .contentbox").css("display","none");
        });  

        function eventsliderInit() {
          var $eventslider = jQuery(".event-slider");
          $eventslider.each(function () {   
            
          jQuery(this).slick({
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
          var slideCount1 = jQuery(".event-slider .item").length;
          console.log("slideCount1slideCount1", slideCount1);
            if (slideCount1 < 2){
              jQuery(".btn-wrap .next-btn").addClass("nextDisabled")
            }
          jQuery(this).on('afterChange', function(event, slick, currentSlide, nextSlide) {
            if(jQuery('button.slick-next').hasClass("slick-disabled")){
              jQuery(".btn-wrap .next-btn").addClass("nextDisabled")
            }else{
              jQuery(".btn-wrap .next-btn").removeClass("nextDisabled")
            }

            if(jQuery('button.slick-prev').hasClass("slick-disabled")){
              jQuery(".btn-wrap .prev-btn").addClass("prevDisabled")
            }else{
              jQuery(".btn-wrap .prev-btn").removeClass("prevDisabled")
            }
          });
        });
      }
      eventsliderInit();
      jQuery('.btn-wrap .prev-btn').addClass("prevDisabled");


        jQuery('.btn-wrap .next-btn').on('click', function(){
          jQuery(".event-slider .slick-next").trigger("click");
          //jQuery(".btn-wrap .prev-btn").css("opacity","1");
        });
        jQuery('.btn-wrap .prev-btn').on('click', function(){
          jQuery(".event-slider .slick-prev").trigger("click");
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
      jQuery("html").removeClass("popupopen");
    });

    // Gallery popup Inquire button click to open contact form
    jQuery('.backlink').on('click', function(){
      jQuery('#contact-modal').modal({
          closeExisting: false
      });
    });

    jQuery('.footerbtn').on('click', function(){
      jQuery('#contact-modal').modal({
          closeExisting: false
      });
    });

    // Gallery popup Back arrow button to close popup
    jQuery('.topbar .back-arrow').on('click', function(){
      jQuery('.jquery-modal').hide();
    });

    jQuery('.footercontainer .commonbtn').on('click', function(){
      jQuery('.wpcf7-form-control-wrap .wpcf7-not-valid-tip').css('display', 'none');
      var form = jQuery('form.wpcf7-form');
      form[0].reset();
    });

    jQuery('.mainpopup .topbar .backlink').on('click', function(){
      jQuery('.wpcf7-form-control-wrap .wpcf7-not-valid-tip').css('display', 'none');
      var form = jQuery('form.wpcf7-form');
      form[0].reset();
    });

    
});


