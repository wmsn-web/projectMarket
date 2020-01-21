(function ($) {
  "use strict";


  $("#FormLogin").validate({
              rules: {
                  email:{
                     required: true,
                     email: true
                  },
                 
                   psw:{
                    required: true,
                    minlength:4
                  }
              },
              messages: {
                  email:{
                    required: "Please enter valid Email ID",
                    email: "Please enter valid Email ID"
                  },
                   psw :{
                      required: "Please enter password",
                      minlength: "Password should contain more than 4 characters"
                  }
              }

             });

  $("#FormSignup").validate({
              rules: {
                name:{
                  required:true
                },

                  email:{
                     required: true,
                     email: true
                  },
                 
                   psw:{
                    required: true,
                    minlength:4
                  }
              },
              messages: {

                name:{
                    required: "Please enter your name"
                
                  },

                  email:{
                    required: "Please enter valid Email ID",
                    email: "Please enter valid Email ID"
                  },
                   psw :{
                      required: "Please enter password",
                      minlength: "Password should contain more than 4 characters"
                  }
              }

             });

  $.validator.addMethod("greaterThan", 
function(value, element, params) {

    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) > new Date($(params).val());
    }

    return isNaN(value) && isNaN($(params).val()) 
        || (Number(value) > Number($(params).val())); 
},'Must be greater than {0}.');

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than 10 kb');

 $("#campaign_validate").validate({


              rules: {
                title:{
                  required:true,
                  minlength:5,
                  maxlength:30
                },

                desciption:{
                     required: true,
                     minlength:5,
                     maxlength:500
                  },
                 
                image:{
                     required: true,
                     extension: "png|jpe?g|gif",
                      filesize: 10000000
                 
                  },

                budget:{
                     required: true,
                     number: true,
                     minlength:2,
                     maxlength:10
                  },

                amount:{
                    required: true,
                    number: true,
                    minlength:2,
                    maxlength:10
                  },

                bday:{
                     required: true

                  },

                bday1:{
                     required: true,
                      greaterThan: "#bday"
                  }

                   
              },
              messages: {

                title:{
                    required: "Please enter your title",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 30 characters."
                
                  },
                desciption:{
                    required: "Please enter your title desciption ",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                
                  },
                image:{
                    required: "Please upload your image",
                   extension:"File must be JPG, GIF or PNG Format."
                
                  },
                budget:{
                    required: "Please enter your budget",
                    number: "Only numbers are acceptable.",
                    minlength:"Please enter at least 2 digit.",
                    maxlength: "Please enter no more than 10 digit."
                    
                
                  },
                amount:{
                    required: "Please enter your amount",
                    number: "Only numbers are acceptable.",
                    minlength: "Please enter at least 2 digit.",
                    maxlength:"Please enter no more than 10 digit."
                   
                  },
                bday:{
                    required: "Please select your campaign starting date"
                
                  },
                bday1:{
                    required: "Please Select Your Campaign Ending Date.",
                    greaterThan:"Ending Date Should Be Greater Than Starting Date."
                
                  }

              },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }


             });


 $("#campaignEdit_validate").validate({
    rules: {
                title:{
                  required:true,
                  minlength:5,
                  maxlength:30
                },

                desciption:{
                     required: true,
                     minlength:5,
                     maxlength:500
                  },
                 
                camp_image:{
                     required: true,
                     extension: "png|jpe?g|gif",
                      filesize: 10000000
                  
                  },

                budget:{
                     required: true,
                     number: true,
                     minlength:2,
                     maxlength:10
                  },

                amount:{
                    required: true,
                    number: true,
                    minlength:2,
                    maxlength:10
                  },

                bday:{
                     required: true
                    },

                bday1:{
                     required: true,
                    greaterThan: "#bday"
                  }

                   
              },
              messages: {

                title:{
                    required: "Please enter your title",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 30 characters."
                
                  },
                desciption:{
                    required: "Please enter your title desciption ",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                
                  },
                camp_image:{
                    required: "Please upload your image",
                   extension:"File must be JPG, GIF or PNG Format"
                
                  },
                budget:{
                    required: "Please enter your budget",
                    number: "Only numbers are acceptable.",
                    minlength:"Please enter at least 2 digit.",
                    maxlength: "Please enter no more than 10 digit."
                    
                
                  },
                amount:{
                    required: "Please enter your amount",
                    number: "Only numbers are acceptable.",
                    minlength: "Please enter at least 2 digit.",
                    maxlength:"Please enter no more than 10 digit."
                   
                  },
                bday:{
                    required: "Please select your campaign starting date."
                
                  },
                bday1:{
                    required: "Please Select Your Campaign Ending Date.",
                    greaterThan:"Ending Date Should Be Greater Than Starting Date."
                
                  }

              },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }


             });


 $("#store_validation").validate({
    rules: {
                nme:{
                  required:true,
                  minlength:5,
                  maxlength:20
                  },

                address:{
                     required: true,
                     minlength:10,
                     maxlength:200
                  },

                img_url:{
                    required: true
                  },

                store_uniq_id:{
                    required: true
                  },

                desc:{
                    minlength:5,
                    maxlength:500
                  }

              },
              messages: {

                nme:{
                    required: "Please enter a store name",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 20 characters."
                
                  },
                address:{
                    required: "Please enter a address ",
                    minlength:"Please enter at least 10 characters.",
                    maxlength: "Please enter no more than 200 characters."
                
                  },
                img_url:{
                    required: "Please enter image url."
                  },

                store_uniq_id:{
                    required: "Please enter unique id for your store."
                  },

                desc:{
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                   }

                },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }

             });

 $("#storeEdit_validation").validate({
    rules: {
                st_name:{
                  required:true,
                  minlength:5,
                  maxlength:20
                },

                address:{
                     required: true,
                     minlength:10,
                     maxlength:200
                  },

                img_url:{
                    required: true
                  },

                store_uniq_id:{
                    required: true
                  },

                desc:{
                    minlength:5,
                    maxlength:500
                  }

              },
              messages: {

                st_name:{
                    required: "Please enter a store name",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 20 characters."
                
                  },

                address:{
                    required: "Please enter a address ",
                    minlength:"Please enter at least 10 characters.",
                    maxlength: "Please enter no more than 200 characters."
                
                  },

                img_url:{
                    required: "Please enter image url."
                  },

                store_uniq_id:{
                    required: "Please enter unique id for your store."
                  },

                desc:{
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                   }

                },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }

             });
                 
 $("#product_validation").validate({
    rules: {
                nme:{
                  required:true,
                  minlength:5,
                  maxlength:20
                },

                price:{
                     required: true,
                     number: true,
                     minlength:2,
                     maxlength:10
                },

                description:{
                  minlength:5,
                  maxlength:500
                }


              },
              messages: {

                nme:{
                    required: "Please enter a product name",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 20 characters."
                  },

                price:{
                    required: "Please enter a price ",
                    number: "Only numbers are acceptable.",
                    minlength:"Please enter at least 2 digit.",
                    maxlength: "Please enter no more than 10 digit."
                   },

                description:{
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                   }

                },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }

             });

$("#download_csv").validate({
  submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }
});


$("#uploadcv").validate({
  submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }
});


  $("#productEdit_validation").validate({
    rules: {
                nme:{
                  required:true,
                  minlength:5,
                  maxlength:20
                },

                price:{
                     required: true,
                     number: true,
                     minlength:2,
                     maxlength:10
                },

                description:{
                  minlength:5,
                  maxlength:500
                }


              },
              messages: {

                nme:{
                    required: "Please enter a product name",
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 20 characters."
                  },

                price:{
                    required: "Please enter a price ",
                    number: "Only Numbers Are Acceptable.",
                    minlength:"Please enter at least 2 digit.",
                    maxlength: "Please enter no more than 10 digit."
                   },

                description:{
                    minlength:"Please enter at least 5 characters.",
                    maxlength: "Please enter no more than 500 characters."
                   }

                },
              submitHandler: function(form) { 
                  $('.preshadow,.preloader').show();
                  form.submit();
                }

             });



  $(".log_btn").on("click",function(){
    $(".mobile-nav").css("width","0px");
    $(".mobile-nav-overly").hide();
    $(".modal-backdrop.show").css("opacity","0");
  });

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });

  // jQuery counterUp (used in Whu Us section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');
  
      portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

})(jQuery);


       
