
$(function () {
    'use strict';

    //Mobile Menu
    //--------------------------------------------------------
    var bodyObj = $('body');
    var MenuObj = $("#menu");
    var mobileMenuObj = $('#mobile-menu');

    bodyObj.wrapInner('<div id="wrap"></div>');

    var toggleMenu = {
        elem: MenuObj,
        mobile: function () {
            //activate mmenu
            mobileMenuObj.mmenu({
                slidingSubmenus: true,
                position: 'right',
                zposition: 'front'
            }, {
                pageSelector: '#wrap'
            });

            //hide desktop top menu
            this.elem.hide();
        },
        desktop: function () {
            //close the menu
            mobileMenuObj.trigger("close.mm");

            //reshow desktop menu
            this.elem.show();
        }
    };

    Harvey.attach('screen and (max-width:991px)', {
        setup: function () {
            //called when the query becomes valid for the first time
        },
        on: function () {
            //called each time the query is activated
            toggleMenu.mobile();
        },
        off: function () {
            //called each time the query is deactivated
        }
    });

    Harvey.attach('screen and (min-width:992px)', {
        setup: function () {
            //called when the query becomes valid for the first time
        },
        on: function () {
            //called each time the query is activated
            toggleMenu.desktop();
        },
        off: function () {
            //called each time the query is deactivated
        }
    });

    //Header Dropdown Menu
    //--------------------------------------------------------
    var megaMenuHasChildren = $('.dropdown');
    var megaMenuDropdownMenu = $('.dropdown-menu');

    megaMenuHasChildren.on({
        mouseenter: function () {
            if (navigator.userAgent.match(/iPad/i) !== null) {
                $(this).find(megaMenuDropdownMenu).stop(true, true).slideDown('400');
            } else {
                $(this).find(megaMenuDropdownMenu).stop(true, true).delay(400).slideDown();
            }
        }, mouseleave: function () {
            if (navigator.userAgent.match(/iPad/i) !== null) {
                $(this).find(megaMenuDropdownMenu).stop(true, true).slideUp('400');
            } else {
                $(this).find(megaMenuDropdownMenu).stop(true, true).delay(400).slideUp();
            }
        }
    });

    //Select List (Dropdown)
    //--------------------------------------------------------
    var selectObj = $('select');
    var selectListObj = $('ul.select-list');
    selectObj.each(function () {
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-list'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.on('click', function (e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function () {
                $(this).removeClass('active').next(selectListObj).hide();
            });
            $(this).toggleClass('active').next(selectListObj).toggle();
        });

        $listItems.on('click', function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
        });

        $(document).on('click', function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });

    //Facts Counter
    //--------------------------------------------------------
    var counterObj = $('.fact-counter');
    counterObj.counterUp({
        delay: 10,
        time: 500
    });

    //Category Filter (MixItUp Plugin)
    //--------------------------------------------------------
    var folioFilterObj = $('#category-filter');
    folioFilterObj.mixItUp();

    //Vertical Tabs
    //--------------------------------------------------------
    var tabObject = $(".tabs-menu li");
    var tabContent = $(".tabs-list .tab-content");
    tabObject.on('click', function (e) {
        e.preventDefault();
        $(this).siblings('li.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        tabContent.removeClass("active");
        tabContent.eq(index).addClass("active");
    });

    //Blog Tags (Tooltip)
    //--------------------------------------------------------
    var tagObj = $('[data-toggle="blog-tags"]');
    tagObj.tooltip();

    //Owl Carousel
    //--------------------------------------------------------
    var owlObj = $('.owl-carousel');
    owlObj.owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    var owlEventObj = $('.owl-carousel-event');
    owlEventObj.owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    //Sidebar Accordion
    //--------------------------------------------------------
    var secondaryObj = $('#secondary [data-accordion]');
    var multipleObj = $('#multiple [data-accordion]');
    var singleObj = $('#single[data-accordion]');

    secondaryObj.accordion({
        singleOpen: true
    });

    multipleObj.accordion({
        singleOpen: false
    });

    singleObj.accordion({
        transitionEasing: 'cubic-bezier(0.455, 0.030, 0.515, 0.955)',
        transitionSpeed: 200
    });

    //Responsive Tabs
    //--------------------------------------------------------
    var restabObj = $('#responsiveTabs');
    restabObj.responsiveTabs({
        startCollapsed: 'accordion'
    });

    //Responsive Tables
    //--------------------------------------------------------
    var tableObj = $('.table');
    var shoptableObj = $('.shop_table');
    tableObj.basictable({
        breakpoint: 991
    });

    shoptableObj.basictable({
        breakpoint: 991
    });

    //Form Fields (Value Disappear on Focus)
    //--------------------------------------------------------
    var requiredFieldObj = $('.input-required');

    requiredFieldObj.find('input').on('focus',function(){
        if(!$(this).parent(requiredFieldObj).find('label').hasClass('hide')){
            $(this).parent(requiredFieldObj).find('label').addClass('hide');
        }
    });
    requiredFieldObj.find('input').on('blur',function(){
        if($(this).val() === '' && $(this).parent(requiredFieldObj).find('label').hasClass('hide')){
            $(this).parent(requiredFieldObj).find('label').removeClass('hide');
        }
    });

    //Bootstrap Carousel Swipe (Testimonials Carousel)
    //--------------------------------------------------------
    var testimonialsObj = $("#testimonials");
    testimonialsObj.swiperight(function () {
        $(this).carousel('Anterior');
    });
    testimonialsObj.swipeleft(function () {
        $(this).carousel('Proximo');
    });

    //Bx Carousel
    //--------------------------------------------------------

    //Popular Items Detail V1

    var popularSlidesD1 = 2;
    var popularWidthD1 = 370;
    var popularMarginD1 = 54;

    if($(window).width() <= 1199) {
        popularSlidesD1 = 2;
        popularWidthD1 = 330;
        popularMarginD1 = 37;
    }
    if($(window).width() <= 991) {
        popularSlidesD1 = 2;
        popularWidthD1 = 350;
        popularMarginD1 = 20;
    }
    if($(window).width() <= 767) {
        popularSlidesD1 = 1;
        popularWidthD1 = 320;
        popularMarginD1 = 0;
    }

    var popularItemObjD1 = $('.popular-items-detail-v1');
    popularItemObjD1.bxSlider({
        minSlides: 1,
        maxSlides: popularSlidesD1,
        slideWidth: popularWidthD1,
        slideMargin: popularMarginD1,
        responsive: true,
        touchEnabled: true,
        controls: false,
        infiniteLoop: true,
        shrinkItems: true,
        auto: false
    });


    //Popular Items Detail V2

    var popularSlidesD2 = 3;
    var popularWidthD2 = 360;
    var popularMarginD2 = 30;

    if($(window).width() <= 1199) {
        popularSlidesD2 = 3;
        popularWidthD2 = 300;
        popularMarginD2 = 20;
    }
    if($(window).width() <= 991) {
        popularSlidesD2 = 2;
        popularWidthD2 = 350;
        popularMarginD2 = 20;
    }
    if($(window).width() <= 767) {
        popularSlidesD2 = 1;
        popularWidthD2 = 320;
        popularMarginD2 = 0;
    }

    var popularItemObjD2 = $('.popular-items-detail-v2');
    popularItemObjD2.bxSlider({
        nextSelector: '#LivroProximo',
        prevSelector: '#LivroAnterior',
        nextText: 'Proximo →',
        prevText: '← Anterior',
        minSlides: 1,
        maxSlides: popularSlidesD2,
        slideWidth: popularWidthD2,
        slideMargin: popularMarginD2,
        responsive: true,
        touchEnabled: true,
        controls: false,
        infiniteLoop: true,
        shrinkItems: true,
        auto: false
    });
    $('#LivroProximo').click(function(){
        popularItemObjD2.goToNextSlide();
        return false;
    });

    $('#LivroAnterior').click(function(){
        popularItemObjD2.goToPrevSlide();
        return false;
    });

    //Contact Form Submit/Validation
    //--------------------------------------------------------
    var emailerrorvalidation = 0;
    var formObj = $('#contact');
    var contactFormObj = $('#submit-contact-form');
    var firstNameFieldObj = $("#first-name");
    var lastNameFieldObj = $("#last-name");
    var emailFieldObj = $("#email");
    var phoneFieldObj = $("#phone");
    var messageFieldObj = $("#message");
    var successObj = $('#success');
    var errorObj = $('#error');

    contactFormObj.on('click', function () {
        var emailaddress = emailFieldObj.val();
        function validateEmail(emailaddress) {
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (filter.test(emailaddress)) {
                return true;
            } else {
                return false;
            }
        }

        var data = {
            firstname: firstNameFieldObj.val(),
            lastname: lastNameFieldObj.val(),
            email: emailFieldObj.val(),
            phone: phoneFieldObj.val(),
            message: messageFieldObj.val()
        };
        if (data.firstname === '' || data.lastname === '' || data.email === '' || data.phone === '' || data.message === '') {
            alert("All fields are mandatory");
        } else {
            if (validateEmail(emailaddress)) {
                if (emailerrorvalidation === 1) {
                    alert('Nice! your Email is valid, you can proceed now.');
                }
                emailerrorvalidation = 0;
                $.ajax({
                    type: "POST",
                    url: "contact.php",
                    data: data,
                    cache: false,
                    success: function () {
                        successObj.fadeIn(1000);
                        formObj[0].reset();
                    },
                    error: function () {
                        errorObj.fadeIn(1000);
                    }
                });
            } else {
                emailerrorvalidation = 1;
                alert('Oops! Invalid Email Address');
            }
        }
        return false;
    });

    /*var currFFZoom = 1;
    var currIEZoom = 100;

    $('#zoomIn').on('click',function(){
        alert('zoooo');
        if ($.browser.mozilla){
            var step = 0.02;
            currFFZoom += step;
            $('body').css('MozTransform','scale(' + currFFZoom + ')');
        } else {
            var step = 2;
            currIEZoom += step;
            $('body').css('zoom', ' ' + currIEZoom + '%');
        }
    });

    $('#zoomOut').on('click',function(){

        alert('zaaaa');
        if ($.browser.mozilla){
            var step = 0.02;
            currFFZoom -= step;
            $('body').css('MozTransform','scale(' + currFFZoom + ')');

        } else {
            var step = 2;
            currIEZoom -= step;
            $('body').css('zoom', ' ' + currIEZoom + '%');
        }
    });*/

    // Set initial zoom level
    var zoom_level=100;

    // Click events
    $('#zoomIn').click(function() { zoom_page(10, $(this)) });
    $('#zoomOut').click(function() { zoom_page(-10, $(this)) });
    $('#zoom_reset').click(function() { zoom_page(0, $(this)) });

    // Zoom function
    function zoom_page(step, trigger)
    {
        // Zoom just to steps in or out
        if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
        console.log(zoom_level);
        // Set / reset zoom
        if(step==0) zoom_level=100;
        else zoom_level=zoom_level+step;

        // Set page zoom via CSS
        $('#main').css({
            transform: 'scale('+(zoom_level/100)+')', // set zoom=
            transformOrigin: '0% 0' // set transform scale base
        });
        /*$('body').css({
            zoom: (zoom_level + step)
        });*/


        // Adjust page to zoom width
        if(zoom_level>100) $('body').css({ width: (zoom_level*1.2)+'%' });
        else $('#main').css({ width: '100%' });

        // Activate / deaktivate trigger (use CSS to make them look different)
       /* if(zoom_level>=120 || zoom_level<=80) trigger.addClass('disabled');
        else trigger.parents('ul').find('.disabled').removeClass('disabled');
        if(zoom_level!=100) $('#zoom_reset').removeClass('disabled');
        else $('#zoom_reset').addClass('disabled');*/
    }

//jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        //alert(this.id);
        if(this.id == "LivroProximo"){
            return false;
        }
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale('+scale+')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        return false;
    });





    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function cookie() {
        var x = getCookie("mostrarModal");

        if (x == "" || x == null) {
            console.log("Welcome! mostrarModal");
            setCookie("mostrarModal", "mostrarModal", 365);
            $('#myModal').modal('show');
        } else if (x == "mostrarModal") {
            console.log("You came back! mostrarModal");
        }
    }

    cookie();


    $('#modalClose').click(function(){
        $('#myModal').modal('hide');
        return false;
    });
});

$( window ).load(function() {
    //Masonry
    //--------------------------------------------------------
    var girdFieldObj = $('.grid');
    girdFieldObj.masonry({
        itemSelector: '.grid-item',
        percentPosition: true
    });
});