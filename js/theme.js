!function(e){"use strict";e(document).on("ready",function(){e.fn.visible=function(a){var t=e(this),o=e(window),i=o.scrollTop(),n=i+o.height(),l=t.offset().top,s=l+t.height();return(!0===a?l:s)<=n&&(!0===a?s:l)>=i},e(document).on("click","[data-toggle-class]",function(a){var t=e(this),o=t.attr("data-toggle-class"),i=t.attr("data-toggle-class-target")||t.attr("data-target"),n=t.attr("data-target-closest"),l=o&&o.split(",")||"",s=i&&i.split(",")||Array(t),r=0;e.each(l,function(a,o){var i=n?t.closest(s[1==s.length?0:r]):e(s[1==s.length?0:r]),c=i.attr("data-class"),d=l[a];c!=d&&i.removeClass(i.attr("data-class")),i.toggleClass(l[a]),i.attr("data-class",d),r++}),t.toggleClass("active"),"#"==t.attr("href")&&a.preventDefault()}),e("a.scroll-target").on("click",function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")||location.hostname==this.hostname){var a=e(this.hash);if((a=a.length?a:e("[name="+this.hash.slice(1)+"]")).length)return e("html,body").animate({scrollTop:a.offset().top-75},1e3),!1}}),e('[data-toggle="tooltip"]').tooltip(),e(".ajax-sub-form").length>0&&(e(".ajax-sub-form").ajaxChimp({language:"es",url:"https://heloshape.us19.list-manage.com/subscribe/post?u=39657911dbafbf74565c09ef2&amp;id=2e580f0cc7"}),e.ajaxChimp.translations.es={submit:"Submitting...",0:"Thanks for your subscription",1:"Please enter a valid email",2:"An email address must contain a single @",3:"The domain portion of the email address is invalid (the portion after the @: )",4:"The username portion of the email address is invalid (the portion before the @: )",5:"This email address looks fake or invalid. Please enter a real email address"}),e("img.svg").each(function(){var a=e(this),t=a.attr("id"),o=a.attr("class"),i=a.attr("src");e.get(i,function(i){var n=e(i).find("svg");void 0!==t&&(n=n.attr("id",t)),void 0!==o&&(n=n.attr("class",o+" replaced-svg")),!(n=n.removeAttr("xmlns:a")).attr("viewBox")&&n.attr("height")&&n.attr("width")&&n.attr("viewBox","0 0 "+n.attr("height")+" "+n.attr("width")),a.replaceWith(n)},"xml")});var a=e(".main-menu-list ul li.dropdown-holder>a");e(".main-menu-list ul li.dropdown-holder .expander");function t(a){a.each(function(){var a=e(this),t=a.data("animation");a.addClass(t).one("webkitAnimationEnd animationend",function(){a.removeClass(t)})})}e(".sidebar-menu-open").length&&e(".sidebar-menu-open").on("click",function(){e("#sidebar-menu").addClass("show-menu")}),e(".close-button").length&&e(".close-button").on("click",function(){e("#sidebar-menu").removeClass("show-menu")}),a.on("click",function(e){e.preventDefault()}),a.append(function(){return'<button type="button" class="expander"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>'}),a.on("click",function(){e(this).parent("li").children("ul").hasClass("show")?e(this).parent("li").children("ul").removeClass("show"):(e(".sub-menu.show").removeClass("show"),e(this).parent("li").children("ul").addClass("show"))}),e(".product-value").length&&(e(".value-increase").on("click",function(){var a=e(this).closest("ul").find(".product-value"),t=parseInt(a.val());isNaN(t)||a.val(t+1)}),e(".value-decrease").on("click",function(){var a=e(this).closest("ul").find(".product-value"),t=parseInt(a.val());!isNaN(t)&&t>1&&a.val(t-1)}));var o=e(".carousel"),i=o.find(".carousel-item:first").find("[data-animation ^= 'animated']");o.carousel(),t(i),o.on("slide.bs.carousel",function(a){t(e(a.relatedTarget).find("[data-animation ^= 'animated']"))}),e("#eCommerce-carousel").bind("mousewheel DOMMouseScroll",function(a){a.originalEvent.wheelDelta>0||a.originalEvent.detail<0?e(this).carousel("prev"):e(this).carousel("next")}),e(".price-ranger").length&&(e(".price-ranger #slider-range").slider({range:!0,min:0,max:500,values:[0,335],slide:function(a,t){e(".price-ranger .ranger-min-max-block .min").val("$"+t.values[0]),e(".price-ranger .ranger-min-max-block .max").val("$"+t.values[1])}}),e(".price-ranger .ranger-min-max-block .min").val("$"+e(".price-ranger #slider-range").slider("values",0)),e(".price-ranger .ranger-min-max-block .max").val("$"+e(".price-ranger #slider-range").slider("values",1))),e(".filter-button").length&&e(".filter-button").on("click",function(){e(".large-filter-content").toggleClass("show-content"),e(".filter-button").toggleClass("open")}),e(".toggle-search").length&&e(".toggle-search .icon").on("click",function(){e(this).parent("form").toggleClass("show")}),e("select").length&&e(".theme-select-menu").selectize(),e(window).on("scroll",function(){var a=e(".theme-main-menu");e(window).scrollTop()>=100?a.addClass("fixed"):a.removeClass("fixed")}),e("input,textarea").each(function(){e(this).data("holder",e(this).attr("placeholder")),e(this).on("focusin",function(){e(this).attr("placeholder","")}),e(this).on("focusout",function(){e(this).attr("placeholder",e(this).data("holder"))})}),e(window).on("scroll",function(){e(this).scrollTop()>200?e(".scroll-top").fadeIn():e(".scroll-top").fadeOut()}),e(".scroll-top").on("click",function(){return e("html, body").animate({scrollTop:0},1500),!1});var n=e(".timer");n.length&&n.appear(function(){n.countTo()}),e(".js-tilt").length&&e(".js-tilt").tilt({glare:!0,maxGlare:.4}),e(".iziModal").length&&e(".iziModal").iziModal({width:2550,overlayColor:"rgba(255, 255, 255, 0.95)",fullscreen:!0}),e(".progress-bar").each(function(){var a=e(this).data("percent");e(this).css({transition:"width 3s"}),e(this).appear(function(){console.log("hello"),e(this).css("width",a+"%"),e(this).find(".count").countTo({from:0,to:a,speed:3e3,refreshInterval:50})})});var l=e(".banner-one");l.length&&l.camera({height:"940px",pagination:!1,navigation:!1,thumbnails:!1,playPause:!1,pauseOnClick:!1,autoPlay:!0,hover:!1,overlayer:!0,loader:"none",minHeight:"400px",time:6e6});var s=e(".gallery-slider");s.length&&s.owlCarousel({loop:!0,nav:!0,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],dots:!1,autoplay:!0,autoplayTimeout:4e3,smartSpeed:1200,autoplayHoverPause:!0,lazyLoad:!0,responsive:{0:{items:1},600:{items:2},1100:{items:3},1550:{items:4}}});var r=e(".agn-testimonial-slider");r.length&&r.owlCarousel({loop:!0,nav:!0,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],dots:!1,autoplay:!0,autoplayTimeout:4e3,smartSpeed:1200,autoplayHoverPause:!0,lazyLoad:!0,items:1});var c=e(".blog-one-slider");c.length&&c.owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,margin:30,autoplayTimeout:4e3,smartSpeed:1200,autoplayHoverPause:!0,lazyLoad:!0,responsive:{0:{items:1},768:{items:2},992:{items:3}}});var d=e(".partner-slider");d.length&&d.owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:4e3,autoplaySpeed:1e3,lazyLoad:!0,singleItem:!0,center:!0,responsive:{0:{items:1},550:{items:3},992:{items:5}}});var u=e(".customer-slider");u.length&&u.owlCarousel({loop:!0,nav:!0,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],dots:!1,autoplay:!0,margin:0,autoplayTimeout:4500,autoplaySpeed:1e3,lazyLoad:!0,singleItem:!0,responsive:{0:{items:1},768:{items:2},992:{items:3}}});var p=e(".arch-client-slider");p.length&&p.owlCarousel({loop:!0,nav:!1,dots:!0,autoplay:!0,margin:30,autoplayTimeout:4500,autoplaySpeed:1e3,lazyLoad:!0,singleItem:!0,responsive:{0:{items:1},768:{items:2},1100:{items:3}}});var m=e(".related-product-slider");m.length&&m.owlCarousel({loop:!0,nav:!0,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],dots:!1,autoplay:!0,margin:30,autoplayTimeout:4500,autoplaySpeed:1e3,lazyLoad:!0,responsive:{0:{items:1},576:{items:2},992:{items:3}}});var h=e(".project-minimal-slider");h.length&&h.owlCarousel({loop:!0,nav:!0,navText:["<i class='flaticon-back'></i>","<i class='flaticon-next'></i>"],dots:!1,autoplay:!0,margin:45,autoplayTimeout:4500,autoplaySpeed:1e3,lazyLoad:!0,singleItem:!0,center:!0,responsive:{0:{items:1},768:{items:2},1200:{items:3}}});var g=e(".team-classic-slider");g.length&&g.owlCarousel({loop:!0,nav:!1,dots:!1,autoplay:!0,margin:30,autoplayTimeout:4500,autoplaySpeed:1e3,lazyLoad:!0,singleItem:!0,responsive:{0:{items:1},550:{items:2},992:{items:3}}}),e("#contact-form").length&&(e("#contact-form").validator(),e("#contact-form").on("submit",function(a){if(!a.isDefaultPrevented()){return e.ajax({type:"POST",url:"inc/contact.php",data:e(this).serialize(),success:function(a){var t="alert-"+a.type,o=a.message,i='<div class="alert '+t+' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+o+"</div>";t&&o&&(e("#contact-form").find(".messages").html(i),e("#contact-form")[0].reset())}}),!1}})),e(".theme-accordion > .panel").length&&(e(".theme-accordion > .panel").on("show.bs.collapse",function(a){e(this).find(".panel-heading").addClass("active-panel")}),e(".theme-accordion > .panel").on("hidden.bs.collapse",function(a){e(this).find(".panel-heading").removeClass("active-panel")}),e(".panel-heading a").on("click",function(a){e(this).parents(".panel").children(".panel-collapse").hasClass("show")&&a.stopPropagation()})),e("#particles").length&&particlesJS("particles",{particles:{number:{value:200,density:{enable:!0,value_area:800}},color:{value:"#636593"},shape:{type:"circle",stroke:{width:0,color:"#000000"},polygon:{nb_sides:5},image:{src:"img/github.svg",width:100,height:100}},opacity:{value:.7,random:!0,anim:{enable:!0,speed:1,opacity_min:0,sync:!1}},size:{value:3,random:!0,anim:{enable:!1,speed:4,size_min:.3,sync:!1}},line_linked:{enable:!1,distance:150,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:1,direction:"none",random:!0,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:600}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!0,mode:"bubble"},onclick:{enable:!0,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:1}},bubble:{distance:250,size:0,duration:2,opacity:0,speed:3},repulse:{distance:400,duration:.4},push:{particles_nb:4},remove:{particles_nb:2}}},retina_detect:!0})}),e(window).on("load",function(){(e("#ctn-preloader").fadeOut(),e("#preloader").delay(350).fadeOut("slow"),e("body").delay(350).css({overflow:"visible"}),e("[data-aos]").length&&AOS.init({duration:1e3,mirror:!0}),e(".wow").length)&&new WOW({boxClass:"wow",animateClass:"animated",offset:20,mobile:!0,live:!0}).init();if(e("#isotop-gallery-wrapper , .masnory-blog-wrapper").length){var a=e("#isotop-gallery-wrapper , .masnory-blog-wrapper").isotope({itemSelector:".isotop-item",percentPosition:!0,masonry:{columnWidth:".grid-sizer"}});e(".isotop-menu-wrapper").on("click","li",function(){var t=e(this).attr("data-filter");a.isotope({filter:t})}),e(".isotop-menu-wrapper").each(function(a,t){var o=e(t);o.on("click","li",function(){o.find(".is-checked").removeClass("is-checked"),e(this).addClass("is-checked")})})}var t=e(".fancybox");t.length&&t.fancybox({arrows:!0,buttons:["zoom","slideShow","thumbs","close"],animationEffect:"zoom-in-out",transitionEffect:"zoom-in-out"})}),e(window).on("scroll",function(){e(".hide-pr").each(function(a,t){(t=e(t)).visible(!0)?t.addClass("show-pr"):t.removeClass("show-pr")})})}(jQuery);