"use strict";


jQuery(document).ready(function ($) {


    /*---------------------------------------------*
     * menu stickys
     ---------------------------------------------*/



/*---------------------------------------------*
 * STICKY scroll
 ---------------------------------------------*/


// scroll Up

    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });

 $('.top-company').owlCarousel({
    center: false,
    items: 6,
    loop: true,
    margin: 10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1,
        
          },  
      600: {
        items: 6
      }
    }
  });



  $('.partner').owlCarousel({
    center: true,
    items: 5,
    loop: true,
    margin:5,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 3,
        
          },  
      600: {
        items: 5
      }
    }
  });

  $('.popular-slider').owlCarousel({
    center: false,
    items: 8,
    loop: true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
      320: {
        items: 1,
        },
       678: {
        items: 4,
        
          },           
      960: {
        items: 8
      }
    }
  });
/*top sticky*/      
var affixElement = '#navbar-main';

$(affixElement).affix({
  offset: {
    // Distance of between element and top page
    top: function () {
      return (this.top = $(affixElement).offset().top)
    },
    // when start #footer 
    bottom: function () { 
      return (this.bottom = $('#footer').outerHeight(true))
    }
  }
});



    //End
});
/*sidebar toggle */
$(function() {
            $('.navbar-toggle').click(function() {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
                $('#search').removeClass('in').addClass('collapse').slideUp(200);

                /// uncomment code for absolute positioning tweek see top comment in css
                //$('.absolute-wrapper').toggleClass('slide-in');

            });

            // Remove menu for searching
            $('#search-trigger').click(function() {
                $('.navbar-nav').removeClass('slide-in');
                $('.side-body').removeClass('body-slide-in');

                /// uncomment code for absolute positioning tweek see top comment in css
                //$('.absolute-wrapper').removeClass('slide-in');

            });
});

$(document).ready(function() {

    $('.add-more').on('click', function(e) {

        e.preventDefault();

        
        var contactElement = $('.contact-tr').first().clone();
        contactElement.find('.remove-contact').append('<a href="#"><span class="remove">  <i class="fa fa-times-circle" aria-hidden="true"></i>Remove</span></a>');
        contactElement.appendTo('table#contact');


    });

    $(document).on('click', '#contact .remove', function(e) {
      
        e.preventDefault();
        $(this).parentsUntil('.contact-tr').remove();

    });
   


});

 $( function() {
    $( "#datepicker" ).datepicker();
  });



