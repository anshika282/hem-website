
$(function(){
	// misc adjustments
    
    // backbg
    $('.backbg').each(function(){
       var backbgPath = $(this).attr('src');  
       $(this).parent('.backbgbox').css('background-image', 'url(' + backbgPath + ')');
    });
    
    // Sticky header
	$(window).scroll(function () {
	    if ($(this).scrollTop() > 60) {
	        $('body').addClass("sticky");
	    } else {
	        $('body').removeClass("sticky");
	    }
	});
    
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
    
    // touch detection
    function isTouchDevice() {
        return 'ontouchstart' in document.documentElement;
    }

	if (isTouchDevice()) {
        // on Mobile
        $('body').addClass('touch');
    }
    else {
        // on Desktop
        $('body').addClass('no-touch');
    }
    
    
    // home slider
    $('.homeslider').on('init', function(event, slick){
        $('.homeslider .caption').addClass('showcaption');
    });
    
    $('.homeslider').slick({
        arrows: false,
        dots: true,
        fade: true,
        autoplay: false,
        autoplaySpeed: 8000,
        speed: 1200
    });
    
    $('.homeslider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        $('.homeslider .caption').removeClass('showcaption');    
    });
    $('.homeslider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('.homeslider .caption').addClass('showcaption');
    });
    
    // category carousel
    var category_carousel = new Swiper(".category_carousel", {
        slidesPerView: "auto",
        spaceBetween: 0,
        loop: true,
        centeredSlides: true,
        speed: 800,
        allowTouchMove: false,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        breakpoints: {
            320: {
                allowTouchMove: true,
            },
            480: {
                allowTouchMove: true,
            },
        }
    });
    
    // senses carousel 
    var senses_carousel = new Swiper(".senses_carousel", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".sen-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 40,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 45,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        }
    });
    
    // blessings carousel 
    var blessings_carousel = new Swiper(".blessings_carousel", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".ble-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        }
    });
    
    // indulge carousel 
    var indulge_carousel = new Swiper(".indulge_carousel", {
        slidesPerView: 1,
        spaceBetween: 64,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".ind-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 30,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 45,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 64,
            },
        },
    });
    
    // bundle carousel 
    var bundle_carousel = new Swiper(".bundle_carousel", {
        slidesPerView: 1,
        spaceBetween: 60,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".bun-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1600: {
                slidesPerView: 4,
                spaceBetween: 60,
            },
        }
    });
    
    // testimonial carousel 
    var testimonial_carousel = new Swiper(".testimonial_carousel", {
        slidesPerView: 1,
        spaceBetween: 22,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".test-pagination",
            clickable: true,
        },
        breakpoints: {
            375: {
                slidesPerView: 1.25,
                spaceBetween: 20,
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 3,
                spaceBetween: 22,
            }
        }
    });
    
    // testimonial carousel 2 
    var testimonial_carousel2 = new Swiper(".testimonial_carousel2", {
        slidesPerView: 1,
        spaceBetween: 22,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".test-pagination2",
            clickable: true,
        },
        breakpoints: {
            480: {
                slidesPerView: 1.25,
                spaceBetween: 20,
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1.6,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        }
    });
    
    // trends carousel 
    var trends_carousel = new Swiper(".trends_carousel", {
        slidesPerView: 1,
        spaceBetween: 22,
        loop: false,
        centeredSlides: false,
        speed: 800,
        allowTouchMove: true,
        pagination: {
            el: ".trends-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.25,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1201: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1401: {
                slidesPerView: 3,
                spaceBetween: 22,
            }
        }
    });
    
    // gallery slider
     $('.gallery_main').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: true,
         prevArrow: '.prev_btn',
         nextArrow: '.next_btn',
         dots: false,
         fade: true,
         asNavFor: '.gallery_thumbs',
         pauseOnFocus: false
     });
     $('.gallery_thumbs').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         asNavFor: '.gallery_main',
         dots: false,
         arrows: false,
         centerMode: false,
         focusOnSelect: true,
         autoplay: true,
         autoplaySpeed: 5000,
         pauseOnFocus: false,
         responsive: [
             {
                 breakpoint: 768,
                 settings: {
                     slidesToShow: 4,
                     slidesToScroll: 1
                 }
            },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 3,
                     slidesToScroll: 1
                 }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
     });
    
    // inline svg
    const convertImages = (query, callback) => {
      const images = document.querySelectorAll(query);

      images.forEach(image => {
        fetch(image.src)
        .then(res => res.text())
        .then(data => {
          const parser = new DOMParser();
          const svg = parser.parseFromString(data, 'image/svg+xml').querySelector('svg');

          if (image.id) svg.id = image.id;
          if (image.className) svg.classList = image.classList;

          image.parentNode.replaceChild(svg, image);
        })
        .then(callback)
        .catch(error => console.error(error))
      });
    }

    convertImages('.svg');
    
    // product qty increment
	$('.increment_qty').click(function() {
      var oldVal = $(this).parent().find("input").val();
      if ( parseFloat(oldVal) >= 1 ) {
        var newVal = parseFloat(oldVal) + 1;
        $(this).parent().find("input").val(newVal);
      }
    });
	$('.decrement_qty').click(function() {
      var oldVal = $(this).parent().find("input").val();
      if ( parseFloat(oldVal) >= 2 ) {
        var newVal = parseFloat(oldVal) - 1;
        $(this).parent().find("input").val(newVal);
      }
    });
	

	// Dropdown menu	
	$('.mainnav > ul > li:has(>ul) > a').addClass('listarrow');
	$('.mainnav > ul > li:has(>ul)').doubleTapToGo();
		
	var	mouseIN = function(){
		$(this).find('>ul').show();
		$(this).addClass('menudown');
	};
	var mouseOUT = function(){
		$(this).find('>ul').hide(1);
		$(this).removeClass('menudown');
	}
	
		if($(window).width() > 959) { // runs for desktop version
			$('.mainnav > ul > li:has(>ul)').hoverIntent({
			over: mouseIN,
			out: mouseOUT,
			timeout:400
			});
		}
		
	
	if($(window).width() < 960) {
		$('.mainnav > ul > li:has(>ul)').on('click',function(){
			$(this).find('>ul').slideToggle();
			$(this).siblings('li:has(>ul)').find('>ul').hide();
		});	
	}
	
	
	// mobile menu
	$('.mobile_menubtn').on('click',function(){
		$(this).toggleClass('open');
        $('body').toggleClass('menuopen');
		if($('.mainnav_wrapper ul li .megamenu').is(':visible')) {
    		$('.mainnav_wrapper ul li .megamenu').slideUp();
			$('.mainnav_wrapper ul li .submenu_btn').removeClass('open');
		}
        if($('.mainnav_wrapper ul li ul').is(':visible')) {
    		$('.mainnav_wrapper ul li ul').slideUp();
			$('.mainnav_wrapper ul li .submenu_btn').removeClass('open');
		}
	});
    $('.olay').on('click',function(){
		$('.mobile_menubtn').removeClass('open');
		$('body').removeClass('menuopen');
        $('.mainnav_wrapper ul li .megamenu').slideUp();
        $('.mainnav_wrapper ul li ul').slideUp();
        $('.mainnav_wrapper ul li .submenu_btn').removeClass('open');
	});
    $('.mainnav_wrapper nav').on('click','.submenu_btn',function(){
        var $this = $(this);
        $this.toggleClass('open');
        $this.next('.megamenu').slideToggle();
        $this.next('ul').slideToggle();
//        $this.parent('li').find('li .submenu_btn').removeClass('open');
//        $this.parent('li').find('li ul').slideUp();
    });
	
}); // end document ready

$(window).load(function(e) {

}); // end window load

document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, {
        threshold: 0.3 // Adjust as needed
    });

    const section = document.querySelector('.new_launch');
    if (section) {
        observer.observe(section);
    }
});
