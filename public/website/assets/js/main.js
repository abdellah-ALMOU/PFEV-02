/*=== Javascript function indexing hear===========

1.swiperActivation
2.wowActive
3.counterUp
4.stickyHeader
5.searchOption
6.metismenu (Mobile Menu)
7.sideMenu (desktop menue)
8.datePicker (date picker fill)
9.imageSlideGsap
10.backToTopInit
11.galleryPopUp
12.preloader


==================================================*/

(function ($) {
    'use strict';
  
    var rtsJs = {
        m: function (e) {
            rtsJs.d();
            rtsJs.methods();
        },
        d: function (e) {
            this._window = $(window),
            this._document = $(document),
            this._body = $('body'),
            this._html = $('html')
        },
        methods: function (e) {
            rtsJs.swiperActivation();
            rtsJs.wowActive();
            rtsJs.counterUp();
            rtsJs.stickyHeader();
            rtsJs.searchOption();
            rtsJs.metismenu();
            rtsJs.sideMenu();
            rtsJs.datePicker();
            rtsJs.timePicker();
            rtsJs.imageSlideGsap();
            rtsJs.backToTopInit();
            rtsJs.smoothScroll();
            rtsJs.galleryPopUp();
            rtsJs.preloader();
        },

        // swiper js activation
        swiperActivation: function (e) {
          $(document).ready(function () {
            var swiper = new Swiper(".mySwiper-banner", {
              spaceBetween: 0,
              loop: true,
              hashNavigation: {
                watchState: true,
              },
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              autoplay: {
                delay: 7000,
              },
            });
          });
          $(document).ready(function () {
            var swiper = new Swiper(".mySwiper-about-feedback", {
              spaceBetween: 0,
              loop: true,
              hashNavigation: {
                watchState: true,
              },
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              // navigation: {
              //   nextEl: ".swiper-button-next",
              //   prevEl: ".swiper-button-prev",
              // },
              autoplay: {
                delay: 2000,
              },
            });
          });
          $(document).ready(function () {
            var swiper = new Swiper(".project-home-one", {
              slidesPerView: 5,
              spaceBetween: 10,
              slidesPerGroup: 1,
              // centeredSlides: true,
              // centeredSlides: true,
              loop: true,
              autoplay: {
                delay: 3000,
              },
              loopFillGroupWithBlank: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              breakpoints: {
                1500: {
                  slidesPerView: 4,
                },
                1199: {
                  slidesPerView:3,
                },
                991: {
                  slidesPerView: 3,
                },
                767: {
                  slidesPerView: 2,
                },
                575: {
                  slidesPerView: 1,
                },
                0: {
                  slidesPerView: 1,
                }
              },
            });
        });
        $(document).ready(function () {
          var swiper = new Swiper(".project-details-carousel", {
            spaceBetween: 0,
            loop: true,
            hashNavigation: {
              watchState: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            autoplay: {
              delay: 2000,
            },
          });
        });




        
        },

        // waw js activation
        wowActive: function () {
          new WOW().init();
        },

        // counter up
        counterUp: function (e) {
          $('.counter').counterUp({
              delay: 10,
              time: 2000
            });
            $('.counter').addClass('animated');
            $('h3').addClass('animated fadeIn');
        },

        // sticky header activation
        stickyHeader: function (e) {
          $(window).scroll(function () {
              if ($(this).scrollTop() > 150) {
                  $('.header--sticky').addClass('sticky')
              } else {
                  $('.header--sticky').removeClass('sticky')
              }
          })
        },

        // search popup
        searchOption: function () {
          $(document).on('click', '#search', function () {
            $(".search-input-area").addClass("show");
            $("#anywhere-home").addClass("bgshow");
          });
          $(document).on('click', '#close', function () {
            $(".search-input-area").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '#anywhere-home', function () {
            $(".search-input-area").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
        },

        metismenu:function(){
          $('#mobile-menu-active').metisMenu();
        },
        // side menu desktop
        sideMenu:function(){
          $(document).on('click', '#menu-btn', function () {
            $("#side-bar").addClass("show");
            $("#anywhere-home").addClass("bgshow");
          });
          $(document).on('click', '.close-icon-menu', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '#anywhere-home', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
          $(document).on('click', '.onepage .mainmenu li a', function () {
            $("#side-bar").removeClass("show");
            $("#anywhere-home").removeClass("bgshow");
          });
        },

        // pne page scroll top
        smoothScroll: function (e) {
          $(document).on('click', '.onepage a[href^="#"]', function (event) {
            event.preventDefault();
        
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 2000);
          });
        },
        // pn

        // date picker
        datePicker: function () {
          jQuery(document).ready(function () {
            jQuery('#datepicker').datepicker({
                format: 'dd-mm-yyyy',
                startDate: '+1d'
            });
          });
        },

        // time picker
        timePicker: function () {
          $(function() {
            $('#timepicker').timepicker({
              //timeFormat: 'h:mm p',
              dynamic: false,
              dropdown: true,
              scrollbar: true
            });
          });
        },

        // image slide gsap
        imageSlideGsap: function () {
          gsap.to(".images", {
            scrollTrigger:{
              // trigger: ".images",
              start: "top bottom", 
              end: "bottom top", 
              scrub: 1,
              // markers: true
            },
            x: -250,
          })
        },

        backToTopInit: function () {
          $(document).ready(function(){
          "use strict";
      
          var progressPath = document.querySelector('.progress-wrap path');
          var pathLength = progressPath.getTotalLength();
          progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
          progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
          progressPath.style.strokeDashoffset = pathLength;
          progressPath.getBoundingClientRect();
          progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
          var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
          }
          updateProgress();
          $(window).scroll(updateProgress);	
          var offset = 50;
          var duration = 550;
          jQuery(window).on('scroll', function() {
            if (jQuery(this).scrollTop() > offset) {
              jQuery('.progress-wrap').addClass('active-progress');
            } else {
              jQuery('.progress-wrap').removeClass('active-progress');
            }
          });				
          jQuery('.progress-wrap').on('click', function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
          })
          
          
        });
  
        },
        galleryPopUp: function (e) {
          // Gallery image hover
          $( ".img-wrapper" ).hover(
            function() {
              $(this).find(".img-overlay").animate({opacity: 1}, 600);
            }, function() {
              $(this).find(".img-overlay").animate({opacity: 0}, 600);
            }
          );

          // Lightbox
          var $overlay = $('<div id="overlay"></div>');
          var $image = $("<img>");
          var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
          var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
          var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

          // Add overlay
          $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
          $("#gallery").append($overlay);

          // Hide overlay on default
          $overlay.hide();

          // When an image is clicked
          $(".img-overlay").click(function(event) {
            // Prevents default behavior
            event.preventDefault();
            // Adds href attribute to variable
            var imageLocation = $(this).prev().attr("href");
            // Add the image src to $image
            $image.attr("src", imageLocation);
            // Fade in the overlay
            $overlay.fadeIn("slow");
          });

          // When the overlay is clicked
          $overlay.click(function() {
            // Fade out the overlay
            $(this).fadeOut("slow");
          });

          // When next button is clicked
          $nextButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").next().find("img"));
            // All of the images in the gallery
            var $images = $("#image-gallery img");
            // If there is a next image
            if ($nextImg.length > 0) { 
              // Fade in the next image
              $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            } else {
              // Otherwise fade in the first image
              $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            }
            // Prevents overlay from being hidden
            event.stopPropagation();
          });

          // When previous button is clicked
          $prevButton.click(function(event) {
            // Hide the current image
            $("#overlay img").hide();
            // Overlay image location
            var $currentImgSrc = $("#overlay img").attr("src");
            // Image with matching location of the overlay image
            var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
            // Finds the next image
            var $nextImg = $($currentImg.closest(".image").prev().find("img"));
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            // Prevents overlay from being hidden
            event.stopPropagation();
          });

          // When the exit button is clicked
          $exitButton.click(function() {
            // Fade out the overlay
            $("#overlay").fadeOut("slow");
          });
      },

      preloader:function(){

        var preload = $("#elevate-load");

        if (preload.length){
          window.addEventListener('load',function(){
            document.querySelector('#elevate-load').classList.add("loaded")  ;
          }); 
        };

      },


    }

    rtsJs.m();
  })(jQuery, window) 





