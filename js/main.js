//Responsive Navigation
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('.site-nav-container'),
    $menulink = $('.menu-link'),
    $menuTrigger = $('.menu-item-has-children > a'),
    $searchLink = $('.search-link'),
    $siteSearch = $('.search-module'),
    $siteWrap = $('.site-wrap');

  $searchLink.click(function(e) {
    e.preventDefault();
    $searchLink.toggleClass('active');
    $siteSearch.toggleClass('active');
    $('#search-site').focus();
    $('.search-module input, .search-module .search-exit').attr('tabindex', function(index, attr){
      return attr == -1 ? null : -1;
    });
  });
 //for mobile navigation - sub navigation opens on text as well as arrow click
  $menuTrigger.on('click', function(e) {
       var menuHref = $(this).attr('href');
       console.log(menuHref);
       if (menuHref == '#' || menuHref == "javascript:void(0)" || !menuHref) {
           console.log('true');
           //e.preventDefault();
           $(this).siblings('.m-subnav-arrow').trigger('click');
       }
   });



  $menulink.click(function(e) {
    e.preventDefault();
    $('.sh-sticky-wrap').slideToggle(500);
    $(this).parent().parent().toggleClass('no-border', 1000 ,  'easeOutSine');
    $('.mob-sticky-wrap').toggleClass('active');
    //$menulink.toggleClass('active');
    //$menu.toggleClass('active');
    //$siteWrap.toggleClass('nav-active');
  });

  $("<span class='m-subnav-arrow'></span>").insertAfter(".menu-item-has-children > a");

  $('.sn-li-l1 > .m-subnav-arrow').click(function() {
    $(this).toggleClass('active');
    var $this = $(this).next(".sn-level-2");
    $(this).parent('.menu-item-has-children').toggleClass('active');
    $this.toggleClass('active').next('ul').toggleClass('active');
  });
  $('.sn-li-l2 > .m-subnav-arrow').click(function() {
    $(this).toggleClass('active');
    var $this = $(this).next(".sn-level-3");
    $(this).parent('.menu-item-has-children').toggleClass('active');
    $this.toggleClass('active').next('ul').toggleClass('active');
  });
  $('.sn-li-l3 > .m-subnav-arrow').click(function() {
    $(this).toggleClass('active');
    var $this = $(this).next(".sn-level-4");
    $(this).parent('.menu-item-has-children').toggleClass('active');
    $this.toggleClass('active').next('ul').toggleClass('active');
  });
  $('.side-nav .m-subnav-arrow').click(function() {
    //$('.side-nav .m-subnav-arrow').removeClass('active');
    $(this).toggleClass('active');
    //$('.side-nav .m-subnav-arrow').parent('.menu-item-has-children').removeClass('active');
    $(this).parent('.menu-item-has-children').toggleClass('active');
    //$('.side-nav .m-subnav-arrow').parent('.menu-item-has-children').children('ul').removeClass('active');
    $(this).parent('.menu-item-has-children').children('ul').toggleClass('active');
  });


  $('.sn-nav .menu-item-has-children > a').focus(function() {
    $(this).next('.m-subnav-arrow').trigger('click');
  })

  //for toggle on li clicks
  $('.menu-item-has-children > a').on('click', function(e) {
   var menuHref = $(this).attr('href');
   if (menuHref == '#' || menuHref == "javascript:void(0)" || !menuHref) {
     //e.preventDefault();
     $(this).siblings('.m-subnav-arrows').trigger('click');
   }
  });
});

//for converting nav bar lines to X on click
function myFunction(x) {
  x.classList.toggle("change");
}

//Magnific Popup
$(document).ready(function() {
  $('.lightbox-infographic,.lightbox').magnificPopup({
        type: 'image',
        removalDelay: 500, //Delaying the removal in order to fit in the animation of the popup
        mainClass: 'mfp-fade', //The actual animation
        autoFocusLast:false,
        fixedContentPos: true,
        fixedBgPos: true,
        callbacks: {
            open: function() {
                var self = this;
                self.wrap.on('click.pinhandler', 'img', function() {
                    self.wrap.toggleClass('mfp-force-scrollbars');
                });
            },
            beforeClose: function() {
                this.wrap.off('click.pinhandler');
                this.wrap.removeClass('mfp-force-scrollbars');
            },
            close: function() {
              $('body').addClass('no-transition');
              setTimeout(function () { 
                $('body').removeClass('no-transition');
              }, 2000);
              $.each(this.items, function( index, value ) {
                if (value.el) {
                  $(value.el[0]).addClass('tse-remove-border');
                } else {
                  $(value).removeClass('tse-remove-border');
                }
              });
            },

        },

        image: {
            verticalFit: false
        }
    });

});
// $(document).ready(function() {
//   $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
//     type: 'iframe',
//     mainClass: 'mfp-fade',
//     removalDelay: 500,
//     preloader: false,
//     overflowY: 'hidden',
//     fixedContentPos: true,
//     fixedBgPos: true,
//     callbacks: {
//     close: function() {
//       $(this.ev).addClass('tse-remove-border');
//     },
//   },
//     iframe: {
//       patterns: {
//         youtube: {
//           index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
//           id: 'v=', // String that splits URL in a two parts, second part should be %id%
//           // Or null - full URL will be returned
//           // Or a function that should return %id%, for example:
//           // id: function(url) { return 'parsed id'; }

//           src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0' // URL that will be set as a source for iframe.
//         }
//       },
//       srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
//     }
//   });
// });

$(document).ready(function() {
    $('.popup-youtube, .popup-video, .popup-vimeo, .popup-gmaps').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 500,
      preloader: false,
      overflowY: 'hidden',
      fixedContentPos: true,
      fixedBgPos: true,
      callbacks: {
        open: function() {
          $('.input-group-append.search-close').trigger('çlick');
          if ($( window ).height() < $( document ).height()) {
            $('html').addClass('mfg-popup-open');
          }
        },
        close: function() {
          $('html').removeClass('mfg-popup-open');
          $(this.items).each(function() {
           if ($(this.el)) {
             $(this.el).addClass('tse-remove-border');
           }
          });
        },
      },
      iframe: {
        patterns: {
          youtube: {
            index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
            id: 'v=', // String that splits URL in a two parts, second part should be %id%
            // Or null - full URL will be returned
            // Or a function that should return %id%, for example:
            // id: function(url) { return 'parsed id'; }

            src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0' // URL that will be set as a source for iframe.
          }
        },
        srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
      }
    });
});



//Delayed Popup with localstorage to show popup only once
$(document).ready(function() {
  var findPopupId = $('#delayed-popup').length; // if #delayed-popup exists, findPopupId = 1;
  if (findPopupId > 0) { // only run when #delayed-popup exists
    var wWidth = $(window).width(); // set variable of window width
    if (wWidth >= 640) { //only trigger on tablet or larger to prevent mobile private browsers who don't allow cookies (safari)
      if (localStorage.getItem('popup_show') === null && localStorage.getItem('exitintent_show') === null ) { // check if key is present in local storage to prevent re-triggering
        setTimeout(function() {
          window.$.magnificPopup.open({
            items: {
              src: '#delayed-popup' //ID of inline element
            },
            type: 'inline',
            removalDelay: 500, // delaying the removal in order to fit in the animation of the popup
            mainClass: 'mfp-fade mfp-fade-side', // The actual animation
          });
          localStorage.setItem('popup_show', 'true'); // set the key in local storage
        }, 11000); // delay in millliseconds until the modal triggers
      }
    }
  }
});




// Exit-Intent Modal
$(document).ready(function() {
  // Exit intent
  function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
      obj.addEventListener(evt, fn, false);
    } else if (obj.attachEvent) {
      obj.attachEvent("on" + evt, fn);
    }
  }
  // Exit intent trigger
  var findExitId = $('#exit-popup').length; // if #exit-popup exists, findExitId will contain a value of 1 (or more);
    if(findExitId > 0){ // if findExitId is greater than 0, it means that element exits on the page, therefore execute this code;
    addEvent(document, 'mouseout', function(evt) {
      if (evt.toElement === null && evt.relatedTarget === null && !localStorage.getItem('exitintent_show')) {
      //alert('test');
        window.$.magnificPopup.open({
          items: {
            src: '#exit-popup' //ID of inline element
          },
          type: 'inline',
          removalDelay: 500, //Delaying the removal in order to fit in the animation of the popup
          mainClass: 'mfp-fade mfp-fade-side', //The actual animation
        });
        localStorage.setItem('exitintent_show', 'true'); // Set the flag in localStorage
      }
    });
  }
});


//Show More
$(document).ready(function() {
  $(".showmore").after("<p><a href='#' class='show-more-link'>More</a></p>");
  var $showmorelink = $('.showmore-link');
  $showmorelink.click(function() {
    var $this = $(this);
    var $showmorecontent = $('.showmore');
    $this.toggleClass('active');
    $showmorecontent.toggleClass('active');
    return false;
  });
});

$(document).ready(function() {
  var $expandlink = $('.ce-header');

  $expandlink.click(function() {
    var $this = $(this);
    var $parent = $this.parent('.click-expand');
    var $body = $parent.find('.showmore');

    // If this one is already active, just collapse it
    if ($parent.hasClass('active')) {
      $parent.removeClass('active');
      $body.removeClass('active');
    } else {
      // Close others
      $('.click-expand').removeClass('active').find('.showmore').removeClass('active');
      
      // Open this one
      $parent.addClass('active');
      $body.addClass('active');
    }

    return false;
  });

  // Enable keyboard expand/collapse on Enter key
  $expandlink.keyup(function(e) {
    if (e.which === 13) {
      $(this).click();
    }
  });
});


// Accordion Tabs
$(document).ready(function () {
  $('.accordion-tabs').each(function(index) {
    $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
  });
  $('.accordion-tabs').on('click focus', 'li > a.tab-link', function(event) {
    if (!$(this).hasClass('is-active')) {
      event.preventDefault();
      var accordionTabs = $(this).closest('.accordion-tabs');
      accordionTabs.find('.is-open').removeClass('is-open').hide();

      $(this).next().toggleClass('is-open').toggle();
      accordionTabs.find('.is-active').removeClass('is-active');
      $(this).addClass('is-active');
    } else {
      event.preventDefault();
    }
  });
});





//Sticky Nav
$(function() {

  var findEl = $('.sh-sticky-wrap').length;
  if (findEl <= 0) {
      // do nothing
  } else {


    //Set the height of the sticky container to the height of the nav
    //var navheight = $('.site-nav-container').height();
    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('.sh-sticky-wrap').offset().top;
    //var sticky_navigation_offset_top = $('.sh-sticky-wrap').outerHeight();
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){

      console.log(sticky_navigation_offset_top);

      var scroll_top = $(window).scrollTop(); // our current vertical position from the top
      // if we've scrolled more than the navigation, change its position to fixed to stick to top,
      // otherwise change it back to relative
      if (scroll_top > sticky_navigation_offset_top) { 
        $('.sh-sticky-wrap').addClass('stuck');
        $('.mob-sticky-wrap').addClass('stuck');
        //$('footer').css('padding-bottom',sticky_navigation_offset_top+'px');
        //$('.sh-sticky-inner-wrap').css('height', '187px');
      } else if(scroll_top <= sticky_navigation_offset_top) {
        $('.sh-sticky-wrap').removeClass('stuck'); 
        $('.mob-sticky-wrap').removeClass('stuck'); 
        //$('footer').css('padding-bottom','0');
        // $('.site-header').css('height', 'auto');
      }   
    };
    // run our function on load
    sticky_navigation();
    // and run it again every time you scroll
    $(window).scroll(function() {
      sticky_navigation();
    });

  }
});


/*GDD*/
$(function() {

  var findEl = $('.gdd-005-b .sh-sticky-wrap').length;
  if (findEl <= 0) {
      // do nothing
  } else {


    //Set the height of the sticky container to the height of the nav
    //var navheight = $('.site-nav-container').height();
    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = 160;
    //var sticky_navigation_offset_top = $('.gdd-005-b .sh-sticky-wrap').outerHeight();
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){

      console.log(sticky_navigation_offset_top);

      var scroll_top = $(window).scrollTop(); // our current vertical position from the top
      // if we've scrolled more than the navigation, change its position to fixed to stick to top,
      // otherwise change it back to relative
      if (scroll_top > sticky_navigation_offset_top) { 
        $('.gdd-005-b .sh-sticky-wrap').addClass('stuck');
        //$('footer').css('padding-bottom',sticky_navigation_offset_top+'px');
        //$('.sh-sticky-inner-wrap').css('height', '187px');
      } else if(scroll_top <= sticky_navigation_offset_top) {
        $('.gdd-005-b .sh-sticky-wrap').removeClass('stuck'); 
        //$('footer').css('padding-bottom','0');
        // $('.site-header').css('height', 'auto');
      }   
    };
    // run our function on load
    sticky_navigation();
    // and run it again every time you scroll
    $(window).scroll(function() {
      sticky_navigation();
    });

  }
});

// ipad hover issue
$(document).ready(function() {
  if (!("ontouchstart" in document.documentElement)) {
    document.documentElement.className += " no-touch";
  }

  $(window).on('load orientationchange', function() {
    var wWidth = $(window).width();
    if (wWidth > 960) {
      /*make filters hover behavior switch to tap/clcik on touch screens*/
      if (!$('html').hasClass('no-touch')) { /*Execute code only on a touch screen device*/
        console.log('toucheee');
       
          /*hide  drop-down if it was open*/
          $('.sn-level-1 .menu-item-has-children').bind('touchstart', function(e) {
              $(".sn-level-1 .menu-item-has-children .sub-menu").hide();
              $(this).children(".sub-menu").toggle();
              e.stopPropagation(); //Make all touch events stop at the  container element
          });

           
          $(document).bind('touchstart', function(e) {
            $(".sn-level-1 .menu-item-has-children .sub-menu").fadeOut(300); /*Close filters drop-downs if user taps ANYWHERE in the page*/
          }); 
           
          $('.sn-level-1 .menu-item-has-children .sub-menu').bind('touchstart', function(event){
            event.stopPropagation(); /*Make all touch events stop at the #filter1 ul.children container element*/
          });
       
      }
    }
  });
});


//Smooth Scroll - Detects a #hash on-page link and will smooth scroll to that position. Will not affect regular links.
$(function() {
  $('.smooth-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function() {
$('.cta-btn').on('click', function(e) {
  e.preventDefault(); // Prevent default anchor behavior

  // Get the target element
  var target = $($(this).attr('href'));

  // Check viewport width
  if ($(window).width() > 960) {
    // Desktop: scroll with header offset
    var headerHeight = $('.sh-sticky-wrap').outerHeight();
    $('html, body').animate({
      scrollTop: target.offset().top - headerHeight
    }, 800);
  } else {
    // Mobile: scroll without offset (or use a smaller one)
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 800);
  }
});
  });
//Slide in CTA
$(function() {
    var findEl = $('#slidebox').length;
    if (findEl <= 0) {
        // do nothing
    } else {
        var slidebox = $('#slidebox');
        if (slidebox) {
            $(window).scroll(function() {
                var distanceTop = $('#last').offset().top - $(window).height();
                if ($(window).scrollTop() > distanceTop)
                    slidebox.animate({
                        'right': '0px'
                    }, 300);
                else
                    slidebox.stop(true).animate({
                        'right': '-430px'
                    }, 100);
            });
            $('#slidebox .close').on('click', function() {
                $(this).parent().remove();
            });
        }
    }
});


// include span tags around all navigation elements
$("#hs_menu_wrapper_primary_nav ul li a").each(function( index ) {
  var navText = $( this ).html(); $( this ).html("<span>" + navText + "</span>");
});


//Styles
// $(document).ready(function() {
//  $('.site-content *').removeAttr("style");
// });

$('.main-content').addClass('more height');

var wWidth = $(window).width();
if(wWidth <= 639 ){
  $( ".main-content" ).after( "<div class='link'><a id='readmore' href='javascript:changeheight()'>Show More</a></div>" );
}

$(window).resize(function() {
  var wWidth = $(window).width();
  if (wWidth < 640) {
    var addedDiv = $(".link");
    var length1= addedDiv.length;
    if (addedDiv.length == 0) {
      $(".link").remove();
      $( ".main-content" ).after( "<div class='link'><a id='readmore' href='javascript:changeheight()'>Show More</a></div>" );
    }
  }
  else if (wWidth > 639){
    $(".link").remove();
  }
   $(function() {
       var curHeight = $('.more').height();
       if (curHeight == 250)
           $('#readmore').show();
       else
           $('#readmore').hide();
   });
});
$(function() {
   var curHeight = $('.more').height();
   if (curHeight == 250)
       $('#readmore').show();
   else
       $('#readmore').hide();
});
$(window).on('resize', function() {
   $(function() {
       var curHeight = $('.more').height();
       if (curHeight == 250)
           $('#readmore').show();
       else
           $('#readmore').hide();
   });
});

function changeheight() {
   var readmore = $('#readmore');
   if (readmore.text() == 'Show More') {
       readmore.text("Show Less");
   } else {
       readmore.text("Show More");
   }

   $('.height').toggleClass("heightAuto");
};

//Slider
$(document).ready(function() {
  $(".si-slider .owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      //autoplayTimeout:1000,
      autoplayHoverPause:false,
      animateOut: 'fadeOut',
      responsive: {
          0: {
             items: 1,
             nav: false,
             dots: false,
             //autoHeight: false,
             },
    }
  });
});

$(document).ready(function(){
    // Append all paragraphs on document ready
    $("#field_4_8 .gfield_label").append('<span class="gfield_required">*</span>');
    
});

//back to top
$(document).ready(function() {
  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $('#back-to-top').addClass('show');
        } else {
          $('#back-to-top').removeClass('show');
        }
      };
      backToTop();
      $(window).on('scroll', function () {
        backToTop();
      });
      $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
          scrollTop: 0
        }, 700);
      });
    }
});  

/*----------plp Search----------*/






function ctlSearch_OnClick1() {
var url1;
var theform1 = document.frmSearchBox1;
if (theform1.keyword1.value.length < 2) {
alert('Please enter at least two characters.');
theform1.keyword1.focus();
} else {
var iIndex1 = theform1.ddlSearchType1.value;
var sSearchType1 = theform1.ddlSearchType1.value;
url1 = "//energymachinery.stage.thomasnet-navigator.com/keyword/?&plpver=1001&key=all&keycateg=100"
url1 = url1 + "&SchType=" + sSearchType1;
url1 = url1 + "&keyword=" + encodeURI(theform1.keyword1.value);
url1 = url1 + "&refer=" + encodeURI("//" + document.location.hostname);
document.location.href = url1;
}
}




// Accessible Website
/*============== Focus on tab =============*/
(function($) {
  $(document).on('keyup keydown', function(e) {
    var code = e.keyCode || e.which;
    if (code == '9') {

      //Click to Expand on Focus
      $('.aof-title-wrap > a').focus(function(){
          var target = $(this).parent('.aof-title-wrap').parent().children('.aof-content');
          target.slideDown(500);
          $(this).parent('.aof-title-wrap').addClass('active');
         // $(this).parent('.aof-title-wrap').parent().addClass('active');
      }); 

      $('.aof-content li:last-of-type > a').blur(function(){
        var target = $(this).closest('.aof-item');
        target.children('.aof-title-wrap').removeClass('active');
        target.children('.aof-content').slideUp();
      });
         
        $('.site-nav .menu-item-has-children > a').focus(function(){
            $(this).parent('.menu-item-has-children').children('.sub-menu').show();
        });

       $('.site-nav .menu-item-has-children > .sub-menu li:last-of-type > a').blur(function(){

          if (!$(this).parent().children().hasClass('sub-menu') && $(this).parent().is(':last-child')) {
            $(this).parent().parent('.sub-menu').hide();
            if ($(this).parent('li').parent('.sub-menu').parent('li').next().length <= 0) {
                $(this).parent('li').parent('.sub-menu').parent('li').parent('.sub-menu').hide();
            }
            
            if ($(this).parent().next().length <= 0 && $(this).parent('li').parent('.sub-menu').parent('li').next().length <= 0 && $(this).parent('li').parent('.sub-menu').hasClass('sn-level-3')) {
              $('.sub-menu').hide();
            }
          }
          
       });

       if (code == '9' && e.shiftKey) {
         if ($(document.activeElement).parent().hasClass('menu-item-has-children')) {
           $(document.activeElement).parent().children('.sub-menu').hide();
         }
         $('.site-nav .menu-item-has-children > .sub-menu li:last-of-type a').blur(function(){
           $(this).closest('.sub-menu').show();
         });
   
       }

       $(document).click(function(e) {
          if (!$(e.target).is('.site-nav .menu-item-has-children a')) {
            $('.site-nav .sub-menu').hide();
          }
          if (!$(e.target).is('a') || !$(e.target).is('button') || !$(e.target).is('input')) {

            $('a, button, input').removeClass('tse-remove-border');
          }
       });
    }
  });

  
  $(document).ready(function () {
    $("#skipToContent").on('click', function(e){
      $('body').toggleClass('changeCursor');
      e.stopPropagation();
      e.preventDefault();
        $('.site-header').after('<a href="javascript:void(0)" tabindex="-1" id="siteContentFocusable"></a>');
        $(this).blur();
        if ( window.location.pathname == '/' ){
          $('html, body').animate({
              scrollTop: $("#siteContentFocusable").offset().top
          }, 1000);
        } else {
            $('html, body').animate({
              scrollTop: 0
          }, 1000);
        }
        $('#siteContentFocusable').trigger('focus');
    });

    $('body').on('click contextmenu drag auxclick', 'a, button, input, select', function() {
      $('a, button, input, select, [tabindex="0"]').removeClass('tse-remove-border');
      $(this).addClass('tse-remove-border');
    }).on('blur', function(e) {
      $(this).removeClass('tse-remove-border');
      if (e.which == 2) {
        $(this).addClass('tse-remove-border');
      } 
    });

    $('[tabindex="0"]').on('click contextmenu drag auxclick', function() {
      $('a, button, input, select, [tabindex="0"]').removeClass('tse-remove-border');
      $(this).addClass('tse-remove-border');
    }).on('blur', function(e) {
      $(this).removeClass('tse-remove-border');
      if (e.which == 2) {
        $(this).addClass('tse-remove-border');
      } 
    });

    $('select, button, input').on('mousemove', function(event) {
      //$('a, button, input, select').removeClass('tse-remove-border');
      $(this).addClass('tse-remove-border');
    });

    $("a[href*='tel'], [href*='mailto']").on('click contextmenu drag auxclick', function() {
      $('a, button, input').removeClass('tse-remove-border');
      $(this).addClass('tse-remove-border');
    }).on('blur', function() {
      $(this).addClass('tse-remove-border');
    });

    $("a:not([href*='tel']), a:not([href*='mailto'])").on('blur', function() {
      $("[href*='mailto'], [href*='tel']").removeClass('tse-remove-border');
    });

    // Dynamically Generated buttons
    $('.flexslider .flex-control-nav a').attr('href', 'javascript:void(0)');

    $('.flexslider').on('click', '.flex-control-nav a, .flex-direction-nav a',function() {
      $('a, button, input, select').removeClass('tse-remove-border');
      $(this).addClass('tse-remove-border');
    }).on('blur', function() {
      $(this).removeClass('tse-remove-border');
    }).on('mousemove', '.flex-control-nav a, .flex-direction-nav a', function(event) {
      $(this).addClass('tse-remove-border');
    });

    $('.flexslider .flex-control-nav li').each(function(index, value) {
      $(this).children('a').attr('aria-lable', 'Slide Dot ' + (index+1));
    });

    // Dynamically Generated buttons
    // $('.owl-carousel').on('click', '.owl-prev, .owl-next, .owl-dot',function() {
    //   $('a, button, input').removeClass('tse-remove-border');
    //   $(this).addClass('tse-remove-border');
    // }).on('blur', function() {
    //   $(this).removeClass('tse-remove-border');
    // }); 

  });

    // Flex slider accessibility
    setTimeout(function() {
        // $('.flexslider .flex-viewport li').attr('tabindex', 0);
        $('.flexslider .clone a').attr('tabindex', '-1');
    }, 500);
    $(document.documentElement).on('keyup', function(event) {
        if ($(".flexslider a, .flexslider li, .flex-direction-nav a").is(":focus")) {

            var flexslider = $(document.activeElement).closest(".flexslider");
            // flexslider.flexslider("play") //Play slideshow
            // flexslider.flexslider("pause") //Pause slideshow
            flexslider.flexslider("stop") //Stop slideshow
            
            
            // handle cursor keys
            if (event.keyCode == 37) {
                // go left
                flexslider.flexslider("prev") //Go to previous slide
                // flexslider.find('.flex-prev').trigger('click');

            } else if (event.keyCode == 39) {
                // go right
                flexslider.flexslider("next") //Go to next slide
                // flexslider.find('.flex-next').trigger('click');
            }
        }
    });

    // Owl carousel ADA
    // setTimeout(function() {
    //   $('.owl-carousel .owl-item.cloned a').attr('tabindex', '-1');
    // }, 1000);
    // $(document.documentElement).on('keyup', function (event) {
    //   if ($(".owl-carousel a, .owl-nav button, .owl-dots button").is(":focus")) {

    //     var owlCarousel = $(document.activeElement).closest(".owl-carousel");
          // owlCarousel.trigger('stop.owl.autoplay');
    //     // handle cursor keys
    //     if (event.keyCode == 37) {
    //        // go left
    //       owlCarousel.trigger('prev.owl.carousel');

    //     } else if (event.keyCode == 39) {
    //        // go right
    //        owlCarousel.trigger('next.owl.carousel');
    //     }
    //   }
    // });

    $(window).on('blur', function() {
        $(document.activeElement).addClass('tse-remove-border');
    });
     $('a, button, input, .ce-header, .internal-links-nav a ').mouseover(function() {  
     $(this).addClass('tse-remove-border');
   }).on('blur', function(e) {
     $(this).removeClass('tse-remove-border');
     if (e.which == 2) {
       $(this).addClass('tse-remove-border');
     }
   });
}(jQuery));

$(document).ready(function() {
  $(function() {
    if ($('section').hasClass('internal-links-nav')) {
      var pillar_navigation_offset_top = $('.internal-links-nav').offset().top - $('.internal-links-nav').height();
      var pillar_nav_height = $('.internal-links-nav').outerHeight();

      // Cache selectors
      var lastId,
      topMenu = $(".internal-links-nav"),
      topMenuHeight = topMenu.outerHeight()+15,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

      var pillar_sticky_navigation = function(){
        var wWidth = $(window).width();
        var scroll_position = 0;
        var scroll_top = $(window).scrollTop(); 
        var header_height = $('.gdd-005-b .sh-sticky-wrap').outerHeight();

        if (scroll_top > pillar_navigation_offset_top) { 
          $('.internal-links-nav').addClass('stuck').css('top', header_height+'px');
          $('.additional-content').addClass('pillar-stuck').css('padding-top',pillar_nav_height+'px');
        } else if(scroll_top <= pillar_navigation_offset_top) {
          $('.internal-links-nav').removeClass('stuck').css('top', '0px'); 
          $('.additional-content').removeClass('pillar-stuck').css('padding-top','0');
        }

        if (wWidth >= 960) {
          scroll_position = topMenuHeight + header_height
        } else {
          scroll_position = 0;
        }

        // Get container scroll position
        var fromTop = $(this).scrollTop()+ (scroll_position);
         
        // Get id of current scroll item
        var cur = scrollItems.map(function(){
           if ($(this).offset().top < fromTop)
             return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : topMenu.closest('section').next().attr('id');
         
        // if (lastId !== id) {
        //      lastId = id;
        //      // Set/remove active class
        //      menuItems
        //        .parent().removeClass("pillar-active")
        //        .end().filter("[href='#"+id+"']").parent().addClass("pillar-active");
        // }          
      };

      // run our function on load
      pillar_sticky_navigation();
      // and run it again every time you scroll
      $(window).scroll(function() {
        pillar_sticky_navigation();
      });
    }

  });
});
$(document).ready(function() {

$('.internal-links-navi a,.internal-links-nav a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      var header_height = $('.gdd-005-b .sh-sticky-wrap').height();
      var pillar_nav_height = $('.internal-links-nav').outerHeight();
      var wWidth = $(window).width();
      var smoothtop = 0;
      if (wWidth >= 960) {
        smoothtop = pillar_nav_height ? (header_height + pillar_nav_height) : header_height;
      }
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - smoothtop
        }, 1000);
        return false;
      }
    }
});
if(window.location.hash) {
    var hash = window.location.hash;
     var wWidth = $(window).width();
      if (wWidth >= 960) {
       $('html, body').animate({
      scrollTop: $(hash).offset().top - 70
    }, 1500);
      }
        
  }
  });

$(document).ready(function() {
  $('.internal-links-nav a').click(function(e) {
    e.preventDefault();
    $('.internal-links-nav li').removeClass('pillar-active');
    $(this).parent('li').addClass('pillar-active');
  });
});



$(document).ready(function() {
    var wWidth5 = $(window).width(); // Set variable for window width
    if (wWidth5 >= 960) {
        var firstTabContent = $('.homepage-industries-module .tab-content').first(); // Get the first tab content

        if (firstTabContent.length) {
            var initialHeight = firstTabContent.outerHeight(); // Get the height of the first tab content
            $('.homepage-industries-module .accordion-tabs').css('height', initialHeight + 'px'); // Set height
        }

        // Set up click event on the tab links
        $('.homepage-industries-module .tab-link').on('click', function(event) {
            event.preventDefault(); // Prevent default behavior

            var targetContent = $('#' + $(this).data('target')); // Get target tab content
            var contentHeight = targetContent.outerHeight(); // Get its height

            $('.homepage-industries-module .accordion-tabs').css('height', contentHeight + 'px'); // Update height
        });
    }
});


 $(document).ready(function(){
    $('.si-slider-new').slick({
        arrows: false,
       autoplay: true,
         
        dots: true,
  infinite: true,
  speed: 1000,
   slidesToShow: 1,
  slidesToScroll: 1
  
      });

   
  
  });

$(document).ready(function(){
  $('.ppplm-slider').slick({
    arrows: false,
    autoplay: true,
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1
  });
});
 //Image Carousel
 $('.icwt-slider').slick({
  dots: true,
  infinite: false,
  arrows: false,
  slidesToShow: 1,
  autoplay:true,
  fade: true,
  prevArrow: '<a class="slick-prev" href="javascript:void(0)" aria-label="Previous">Prev</a>',
  nextArrow: '<a class="slick-next" href="javascript:void(0)" aria-label="Next"></a>',
  accessibility: true,
});

//$('.tm-carousel .slick-dots li button').attr('tabindex', -1);

$('.icwt-slider .slick-dots li button').on('click contextmenu drag auxclick',function() {
  $('a, button, input').removeClass('tse-remove-border');
  $(this).addClass('tse-remove-border');
}).on('blur', function() {
  $(this).removeClass('tse-remove-border');
}); 

$('.popup-gallery').each(function() {

  $(this).magnificPopup({
    delegate: 'a',
    type: 'image',
    mainClass: 'mfp-with-zoom', 
    gallery:{
      enabled:true,
      preload: [0,1],
    },

    zoom: {
      enabled: true,
      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function

      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    },
    image: {
      titleSrc: function(item) {
        var markup = '';
        if (item.el[0].hasAttribute("data-title")) {
          markup += '<h3>' + item.el.attr('data-title') + '</h3>';
        }
        
        if (item.el[0].hasAttribute("data-description")) {
          markup += '<p>' + item.el.attr('data-description') + '</p>';
        }
        return markup
      }
    },
    callbacks: {
      open: function() {
        $('.input-group-append.search-close').trigger('çlick');
        if ($( window ).height() < $( document ).height()) {
          $('html').addClass('mfg-popup-open');
        }
      },
      close: function() {
        $('html').removeClass('mfg-popup-open');
        },
      },

  });
});
$(document).ready(function(){
   $('.ims-step-wraper > div:first-child').show();
   $('.imssmmsw-sub-setp-wrap > div:first-child').addClass('active');
   $('.imst-text .cta-btn-wrap').hide();
   $('.imssm-cta-one').click(function(e) {
    e.preventDefault();
    $('.ims-step-wraper > div').hide();
    $('.ims-step-wraper > div.ims-setp-1').show();
    $('.imst-text .cta-btn-wrap').show();
   });
   $('.imssmmsum-list > li > a').click(function(e) {
    e.preventDefault();
     var target = $(this).attr('data-id');
     //console.log(target);
     $('.imssmmsum-list > li > a').removeClass('active');
     $(this).addClass('active');
     $('.arrows-wraper').attr('id',target);
    $('.imssmmsw-sub-setp-wrap > div').removeClass('active');
    $('.imssmmsw-sub-setp-wrap > div[rel="'+target+'"]').addClass('active');
    if ($(window).width() < 639) {
      var $targetDiv = $('.imssmmsw-sub-setp-wrap > div[rel="'+target+'"]');
      if ($targetDiv.length) {
        $("html, body").animate({
          scrollTop: $targetDiv.offset().top - 50 // adjust spacing if needed
        }, 600);
      }
    }
   });

    $('.svg-link').click(function(e) {
    e.preventDefault();
     var target = $(this).attr('data-rel');
     //console.log(target);
     $('.imssmmsum-list > li > a').removeClass('active');
     $('.imssmmsum-list a[data-id="'+target+'"]').addClass("active");
     $('.arrows-wraper').attr('id',target);
    $('.imssmmsw-sub-setp-wrap > div').removeClass('active');
    $('.imssmmsw-sub-setp-wrap > div[rel="'+target+'"]').addClass('active');
   });

  });

$(document).ready(function(){
  function calculate() {
    const costEnergy = parseFloat(document.getElementById("costEnergy").value) || 0;
    const hp = parseFloat(document.getElementById("hp").value) || 0;
    const load = (parseFloat(document.getElementById("load").value) || 0) / 100;
    const hoursDay = parseFloat(document.getElementById("hoursDay").value) || 0;
    const daysWeek = parseFloat(document.getElementById("daysWeek").value) || 0;
    const weeksYear = parseFloat(document.getElementById("weeksYear").value) || 0;
    const leakLoad = (parseFloat(document.getElementById("leakLoad").value) || 0) / 100;
    const leakRepair = (parseFloat(document.getElementById("leakRepair").value) || 0) / 100;

    const compKW = hp * 0.746 * load;
    const avgEff = 0.2;
    const avgFlow = compKW / avgEff;
    const annualHours = hoursDay * daysWeek * weeksYear;
    const leakFlow = avgFlow * leakLoad;
    const leakKW = leakFlow * avgEff;
    const leakEnergy = leakKW * annualHours * leakRepair;
    const savings = leakEnergy * costEnergy;

    document.getElementById("compKW").textContent = compKW.toFixed(2);
    document.getElementById("avgEff").textContent = avgEff.toFixed(2);
    document.getElementById("avgFlow").textContent = avgFlow.toFixed(2);
    document.getElementById("annualHours").textContent = annualHours.toLocaleString();
    document.getElementById("leakFlow").textContent = leakFlow.toFixed(2);
    document.getElementById("leakKW").textContent = leakKW.toFixed(2);
    document.getElementById("leakEnergy").textContent = leakEnergy.toLocaleString(undefined, {maximumFractionDigits:0});
    document.getElementById("savings").textContent = savings.toLocaleString(undefined, {maximumFractionDigits:0});
  }

  document.querySelectorAll("input").forEach(input => {
    input.addEventListener("input", calculate);
  });

  calculate();
  $('.site-header .menu-item-has-children > a').each(function() {

    var parentHref = $(this).attr('href');
    if (parentHref == "#" || !parentHref ) {
      //$(this).addClass('nonlink');
    }
  });

   function updateStep(){
    let activeRel = $(".imssmmsw-sub-setp.active").attr("rel");

    // Update arrows-wraper ID
    $(".arrows-wraper").attr("id", activeRel);

    // Update active link in .imssmmsum-list
    $(".imssmmsum-list a").removeClass("active");
    $('.imssmmsum-list a[data-id="'+activeRel+'"]').addClass("active");
  }

  $(".imsl-btn-next").click(function(){
    let current = $(".imssmmsw-sub-setp.active");
    let next = current.next(".imssmmsw-sub-setp");

    if(next.length){  
      current.removeClass("active");
      next.addClass("active");
      updateStep();
    }else {
      // If last step, go to step-0
      //$(".imssmmsw-sub-setp").removeClass("active");
      current.removeClass("active");
      $('.imssmmsw-sub-setp-0').addClass("active");
      $(".imssmmsum-list a").removeClass("active");
      $('.arrows-wraper').attr('id','setp-sub-0');
    }

  });

  $(".imsl-btn-prev").click(function(){
    let current = $(".imssmmsw-sub-setp.active");
    let prev = current.prev(".imssmmsw-sub-setp");

    if(prev.length){
      current.removeClass("active");
      prev.addClass("active");
      updateStep();
    }
  });
updateStep();


});




$(document).ready(function() {
  //Smooth Scroll - Detects a #hash on-page link and will smooth scroll to that position. Will not affect regular links.
  $('.smooth-scroll, .smooth-scroll > a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      var header_height = $('.sh-sticky-wrap').height();
      var pillar_nav_height = $('.pillarpage-linklist-module, .anchor-links-nav-new').outerHeight();
      var smoothtop = 147 + pillar_nav_height;
  
      // Check viewport width
      var viewportWidth = $(window).width();
      if (viewportWidth > 960) {
        // Apply smoothtop adjustment only above 960px resolution
        smoothtop = 147 + pillar_nav_height;
      } else {
        // No adjustment below 960px resolution
        smoothtop = 0;
      }
  
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - smoothtop
        }, 1000);
        return false;
      }
    }
  });
  

 // Smooth scroll on load
  if(window.location.hash) {
    var hash = window.location.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 150
    }, 1500);
  }
});


$(window).scroll(function(){
  var header_height = $('.sh-sticky-wrap').outerHeight();
  var sticky = $('.anchor-links-nav-new'), scroll = $(window).scrollTop();
  if (scroll >= 400) {
      sticky.addClass('stuck').css('top', header_height+'px');

      //$('.site-content').addClass('top-padding');
  }
  else{ 
    sticky.removeClass('stuck').css('top', '0');
    //$('.site-content').removeClass('top-padding');
  }
});

$(document).ready(function() {
$('.anchor-links-nav li').removeClass('active');
//$('.anchor-links-nav li:first-child').addClass('active');
$('.anchor-links-nav a').click(function() {
   $('.anchor-links-nav li').removeClass('active');
   $(this).parent('li').addClass('active');
});
});

$(document).ready(function() {
$('.anchor-links-nav-new li').removeClass('active');
//$('.anchor-links-nav-new li:first-child').addClass('active');
$('.anchor-links-nav-new a').click(function() {
   $('.anchor-links-nav-new li').removeClass('active');
   $(this).parent('li').addClass('active');
});
});


$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop();
 
  // Assign active class to nav links while scolling
  $('.page-inner-anchor').each(function(i) {
     //console.log($(this).position().top);
      if ($(this).position().top -200 <= scrollDistance) {
          //console.log(scrollDistance);
          $('.anchor-links-nav-new li.active').removeClass('active');
          $('.anchor-links-nav-new li').eq(i).addClass('active');
      }
  });
   
}).scroll();



$(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                //disabled: [3,4],
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });
            $('.select-tab').on('click', function() {
                $tabs.responsiveTabs('activate', $(this).val());
            });

            $('.r-tabs-anchor').on('click focus', function() {
            $('.r-tabs-nav li a').attr('tabindex', '-1');
             $(this).attr('tabindex', '0');
           });

          $('.r-tabs-panel a:last-of-type').blur(function() {
          $('.r-tabs-tab.r-tabs-state-active').next('.r-tabs-tab').children('a').trigger('click').focus();
          });

        });

