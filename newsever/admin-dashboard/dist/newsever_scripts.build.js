!function(e){var i={};function s(n){if(i[n])return i[n].exports;var l=i[n]={i:n,l:!1,exports:{}};return e[n].call(l.exports,l,l.exports,s),l.l=!0,l.exports}s.m=e,s.c=i,s.d=function(e,i,n){s.o(e,i)||Object.defineProperty(e,i,{enumerable:!0,get:n})},s.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,i){if(1&i&&(e=s(e)),8&i)return e;if(4&i&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&i&&"string"!=typeof e)for(var l in e)s.d(n,l,function(i){return e[i]}.bind(null,l));return n},s.n=function(e){var i=e&&e.__esModule?function(){return e.default}:function(){return e};return s.d(i,"a",i),i},s.o=function(e,i){return Object.prototype.hasOwnProperty.call(e,i)},s.p="",s(s.s=71)}({71:function(e,i){!function(e){"use strict";var i=window.AFTHRAMPES_JS||{};$=jQuery,i.mobileMenu={init:function(){this.toggleMenu(),this.menuMobile(),this.menuArrow()},toggleMenu:function(){e("#masthead").on("click",".toggle-menu",(function(i){var s=e(".main-navigation .menu .menu-mobile");"block"==s.css("display")?s.slideUp("300"):s.slideDown("300"),e(".ham").toggleClass("exit")})),e("#masthead .main-navigation ").on("click",".menu-mobile a button",(function(i){i.preventDefault();var s=e(this),n=s.closest("li");if(n.find("> .children").length)var l=n.find("> .children");else l=n.find("> .sub-menu");return"none"==l.css("display")?(l.slideDown("300"),s.addClass("active")):(l.slideUp("300"),s.removeClass("active")),!1}))},menuMobile:function(){if(e(".main-navigation .menu > ul").length){var i=e(".main-navigation .menu > ul"),s=i.closest(".main-navigation").data("epointbreak");void 0===s&&(s=1024),s>=window.innerWidth?(i.addClass("menu-mobile").removeClass("menu-desktop"),e(".main-navigation .toggle-menu").css("display","block")):(i.addClass("menu-desktop").removeClass("menu-mobile").css("display",""),e(".main-navigation .toggle-menu").css("display",""))}},menuArrow:function(){e("#masthead .main-navigation div.menu > ul").length&&(e("#masthead .main-navigation div.menu > ul .sub-menu").parent("li").find("> a").append('<button class="dropdown-toggle">'),e("#masthead .main-navigation div.menu > ul .children").parent("li").find("> a").append('<button class="dropdown-toggle">'))}},i.DataBackground=function(){e(".data-bg").each((function(i){e(this).attr("data-background")&&e(this).css("background-image","url("+e(this).data("background")+")")})),e(".bg-image").each((function(){var i=e(this).children("img").attr("src");e(this).css("background-image","url("+i+")").children("img").hide()}))},i.setInstaHeight=function(){e(".insta-slider-block").each((function(){var i=e(this).find(".insta-item .af-insta-height").eq(0).innerWidth();e(this).find(".insta-item .af-insta-height").css("height",i)}))},i.setHeaderHeight=function(){if(e("#main-navigation-bar").length>0){var i=e("#main-navigation-bar").outerHeight()-3;e(".header-menu-part").height(i)}},i.Offcanvas=function(){e(".offcanvas-nav").sidr({side:"left"}),e(".sidr-class-sidr-button-close").on("click",(function(){e.sidr("close","sidr")}))},i.show_hide_scroll_top=function(){e(window).scrollTop()>e(window).height()/2?e("#scroll-up").fadeIn(300):e("#scroll-up").fadeOut(300)},i.scroll_up=function(){e("#scroll-up").on("click",(function(){return e("html, body").animate({scrollTop:0},800),!1}))},i.MagnificPopup=function(){e(".gallery").each((function(){e(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0},zoom:{enabled:!0,duration:300,opener:function(e){return e.find("img")}}})})),e(".wp-block-gallery").each((function(){e(this).magnificPopup({delegate:"a",type:"image",gallery:{enabled:!0},zoom:{enabled:!0,duration:300,opener:function(e){return e.find("img")}}})}))},i.em_sticky=function(){jQuery(".sidebar-area.aft-sticky-sidebar").theiaStickySidebar({additionalMarginTop:30})},i.jQueryMarquee=function(){e(".marquee.aft-flash-slide").marquee({speed:8e4,gap:0,delayBeforeStart:0,duplicated:!0,pauseOnHover:!0,startVisible:!0})},i.SliderAsNavFor=function(){return e(".banner-single-slider-1-wrap").hasClass("no-thumbnails")?null:".af-banner-slider-thumbnail"},i.RtlCheck=function(){return!!e("body").hasClass("rtl")},i.SlickBannerSlider=function(){e(".af-banner-slider").slick({autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',appendArrows:e(".af-main-banner-navcontrols"),asNavFor:i.SliderAsNavFor(),rtl:i.RtlCheck()})},i.SlickBannerSliderThumbsVertical=function(){e(".af-banner-slider-thumbnail.vertical").slick({slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:1200,speed:1e3,vertical:!0,verticalSwiping:!0,nextArrow:!1,prevArrow:!1,asNavFor:".af-banner-slider",focusOnSelect:!0,responsive:[{breakpoint:770,settings:{vertical:!1,verticalSwiping:!1,slidesToShow:3,slidesToScroll:1}},{breakpoint:601,settings:{vertical:!1,verticalSwiping:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{vertical:!1,verticalSwiping:!1,slidesToShow:2,slidesToScroll:1}}]})},i.SlickBannerCarousel=function(){e(".af-banner-carousel-1").slick({autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:769,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickTrendingPostVertical=function(){e(".trending-posts-vertical ").not(".slick-initialized").slick({slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,speed:1e3,vertical:!0,verticalSwiping:!0,nextArrow:!1,prevArrow:!1,focusOnSelect:!0,responsive:[{breakpoint:770,settings:{verticalSwiping:!1}},{breakpoint:601,settings:{verticalSwiping:!1}},{breakpoint:480,settings:{verticalSwiping:!1}}]})},i.SlickBannerTrendingPostVertical=function(){e(".af-main-banner-trending-posts-vertical-carousel").not(".slick-initialized").slick({slidesToShow:5,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,speed:1e3,vertical:!0,verticalSwiping:!0,nextArrow:!1,prevArrow:!1,focusOnSelect:!0,responsive:[{breakpoint:1025,settings:{vertical:!1,verticalSwiping:!1,slidesToShow:1,slidesToScroll:1}}]})},i.SlickBannerTrendingPostHorizontal=function(){e(".af-main-banner-trending-posts-carousel").not(".slick-initialized").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickPostSlider=function(){e(".af-post-slider").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck()})},i.SlickPostCarousel=function(){e(".af-post-carousel").not(".slick-initialized").slick({slidesToShow:2,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickPostAboveMainBannerCarousel=function(){e("#home-above-main-banner-widgets .af-post-carousel").not(".slick-initialized").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickPostBelowMainBannerCarousel=function(){e("#home-below-main-banner-widgets .af-post-carousel").not(".slick-initialized").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickPostFullWidthCarousel=function(){e(".frontpage-layout-3 .af-post-carousel").not(".slick-initialized").slick({slidesToShow:4,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickPostSingleSidebarCarousel=function(){e(".content-with-single-sidebar .af-post-carousel").not(".slick-initialized").slick({slidesToShow:3,slidesToScroll:1,autoplay:!0,infinite:!0,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck(),responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:769,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})},i.SlickCarouselSecondary=function(){e("#secondary .af-post-carousel").not(".slick-initialized").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,infinite:!0,centerMode:!1,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck()})},i.SlickCarouselTtertiary=function(){e("#tertiary .af-post-carousel").not(".slick-initialized").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,infinite:!0,centerMode:!1,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck()})},i.SlickCarouselSidr=function(){e("#sidr .af-post-carousel").not(".slick-initialized").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,infinite:!0,centerMode:!1,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck()})},i.SlickCarouselFooter=function(){e(".site-footer .af-post-carousel").not(".slick-initialized").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:12e3,infinite:!0,centerMode:!1,nextArrow:'<span class="slide-icon slide-next af-slider-btn"></span>',prevArrow:'<span class="slide-icon slide-prev af-slider-btn"></span>',rtl:i.RtlCheck()})},e(document).ready((function(){i.mobileMenu.init(),i.DataBackground(),i.setInstaHeight(),i.em_sticky(),i.MagnificPopup(),i.jQueryMarquee(),i.setHeaderHeight(),i.Offcanvas(),i.scroll_up(),i.SlickBannerSlider(),i.SlickBannerSliderThumbsVertical(),i.SlickTrendingPostVertical(),i.SlickBannerTrendingPostVertical(),i.SlickBannerTrendingPostHorizontal(),i.SlickBannerCarousel(),i.SlickPostSlider(),i.SlickCarouselSecondary(),i.SlickCarouselTtertiary(),i.SlickCarouselSidr(),i.SlickCarouselFooter(),i.SlickPostAboveMainBannerCarousel(),i.SlickPostBelowMainBannerCarousel(),i.SlickPostFullWidthCarousel(),i.SlickPostSingleSidebarCarousel(),i.SlickPostCarousel()})),e(window).on("scroll",(function(){i.show_hide_scroll_top()})),e(window).on("resize",(function(){i.mobileMenu.menuMobile()})),e(window).on("load",(function(){e("#loader-wrapper").fadeOut(),e("#af-preloader").delay(500).fadeOut("slow"),e(".af-search-click").on("click",(function(){e("#af-search-wrap").toggleClass("af-search-toggle")})),jQuery(".search-icon").on("click",(function(e){e.preventDefault(),jQuery(".search-overlay").toggleClass("reveal-search")}))}))}(jQuery)}});