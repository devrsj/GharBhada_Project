$(document).ready(function() {

    // Bootstrap-Slider
    $(".hero-main .carousel").carousel({
        interval: 3000,
        pause: "false",
    });
    
    // Owl-Carousel
    
    $('#owl-2 .owl-carousel').owlCarousel({
        items: 3,
        margin: 16,
        loop: true,
        stagePadding: 64,
        nav: true,
        dots: false,
        dotsEach: true,
        lazyLoad: false,
        autoplay: true,
        autoplaySpeed: 4500,
        navSpeed: 4500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
          ],
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });

    // Owl-Carousel-Big

    $('#owl-3 .owl-carousel').owlCarousel({
        nav: true,
        margin:10,
        dots: false,
        responsiveClass:true,
        autoplay: true,
        autoplaySpeed: 3000,
        navSpeed: 2000,
        loop: true,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
          ],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:true
            }
        }
    });

    // Owl-Carousel-Big

    $('#owl-4 .owl-carousel').owlCarousel({
      nav: true,
      margin:20,
      dots: false,
      responsiveClass:true,
      autoplay: true,
      autoplaySpeed: 3000,
      navSpeed: 2000,
      loop: true,
      navText: [
          "<i class='fas fa-angle-left'></i>",
          "<i class='fas fa-angle-right'></i>"
        ],
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:2,
              nav:false
          },
          1000:{
              items:3,
              nav:true,
              loop:true
          }
      }
  });

    // Calender

    var curDate = (new Date()).getDate();
    var curMonth = (new Date()).getMonth();
    var curYear = (new Date()).getFullYear();
    var startDay = (new Date(curYear, curMonth, 1)).getDay();
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var noofdays = ["31", "29", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
    var prevMonth = noofdays[curMonth - 1];
    if (curMonth == 11) {
      prevMonth = noofdays[0]
    } else if (curMonth == 0) {
      prevMonth = noofdays[11]
    };
    var totalDays = noofdays[curMonth];
    var counter = 0;
    var precounter = prevMonth - (startDay - 1);
    var rightbox = 6;
    var flag = true;

    jQuery('.curr-month b').text(months[curMonth]);
    for (var i = 0; i < 42; i++) {
      if (i >= startDay) {
        counter++;
        if (counter > totalDays) {
          counter = 1;
          flag = false;
        }
        if (flag == true) {
          jQuery('.all-date ul').append('<li class="monthdate">' + counter + '</li>');
        } else {
          jQuery('.all-date ul').append('<li style="opacity:.6">' + counter + '</li>');
        }
      } else {
        jQuery('.all-date ul').append('<li style="opacity:.6">' + precounter + '</li>');
        precounter++;
      }

      if (i == rightbox) {
        jQuery(jQuery('.all-date ul li')[rightbox]).addClass("b-right");
        rightbox = rightbox + 7;
      }

      if (i > 34) {
        jQuery(jQuery('.all-date ul li')[i]).addClass("b-bottom");
      }

      if ((jQuery(jQuery('.all-date ul li')[i]).text() == curDate) && (jQuery(jQuery('.all-date ul li')[i]).css('opacity') == 1)) {
        jQuery(jQuery('.all-date ul li')[i]).css({
          "background-color": "#99cc00",
          "color": "#fff"
        });
      }
    }


// Accordion


$('.pannel-box-wrap').hide();
    $('.pannel-active').show();
    $('.pannel-active').siblings('p').find('i').addClass('rotate');
  
    $('.account-pannel').on('click',function(){
      var idPannel=$(this).attr('data-idPannel');
      $('#'+idPannel).slideToggle('medium');
      $(".pannel-box-wrap").not($(this).next()).slideUp('medium');
      $(this).find('i').toggleClass('rotate');
      $(".account-pannel i").not($(this).find('i')).removeClass('rotate');
    });


// Register Form Trigger

function toggleRegister(e){
  e.preventDefault();
    $('#register').toggle();
  }

  function toggleReset(e){
    e.preventDefault();
      $('#reset').toggle();
    }

function toggleLogin(e){
  e.preventDefault();
    $('#login').toggle(); 
  }

$(()=>{

  $('#bttn-register').click(toggleLogin);
  $('#bttn-register').click(toggleRegister);

  $('#bttn-login').click(toggleRegister);
  $('#bttn-login').click(toggleLogin);

  $('#bttn-login1').click(toggleLogin);
  $('#bttn-login1').click(toggleReset);

  $('#bttn-login2').click(toggleReset);
  $('#bttn-login2').click(toggleLogin);

});
  



});