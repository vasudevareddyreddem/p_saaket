(function ($) {
    "use strict";

    /*=================================*/
    /* Skills Progress Bar
     /*=================================*/
    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },3000);
    });

    /*=================================*/
    /* Satisfied Client
     /*=================================*/
    $("#logo").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 100,
        paginationSpeed : 300,
        items :5,
        responsive: true,
        autoPlay : true,
        itemsTablet: [768,3],
        itemsTabletSmall: false,
        itemsMobile : [479,2],
        singleItem : false,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,
        pagination:true
    });

    /*=================================*/
    /* Banner Text
     /*=================================*/
    $("#banner-text").owlCarousel({
        items : 1,
        slideSpeed : 500,
        responsive: true,
        itemsTablet: [768,1],
        responsiveBaseWidth: window,
        singleItem : true,
        navigation : false,
        pagination:false,
        autoPlay : true,
        transitionStyle : "goDown"
    });

    /*=================================*/
    /* WOW */
    /*=================================*/
    var wow = new WOW({
            boxClass:'wow',
            animateClass: 'animated',
            offset:100,
            mobile:true,
            live:true,
            callback:function(box) {
            }
        }
    );
    wow.init();

    /*=================================*/
    /* ISOTOPE */
    /*=================================*/
    $(function(){
        var themeGroup = $('.themes-group').isotope({
            itemSelector: '.themes-item',
            transitionDuration: '0.8s'
        });

        // Attach a delegated event handler
        $( ".item-filter" ).on( "click", "a", function( event ) {
            var filterValue = $(this).attr('data-filter');
            themeGroup.isotope({ filter: filterValue });
        });
    });

    /*=================================*/
    /* Adding hover effect to gallery  */
    /*=================================*/
    if ($('.themes-item').length) {
        $('.themes-item .themes-overlay').each(function () {
            $(this).addClass('hvr-shutter-in-vertical');
        });
    }

    /*=================================*/
    /* Counter Init  */
    /*=================================*/
    var wa_counter = $('.counter');
    if ( wa_counter.length ) {
        wa_counter.appear(function(){
            var $this = $(this),
                counterNumber = $this.find('.number');
            counterNumber.countTo({to: $this.find('.number').text(), refreshInterval: 3});
        });
    }

    /*=================================*/
    /* go to top  */
    /*=================================*/
    var offset = 1000,
        offset_opacity = 1200,
        scroll_top_duration = 500,
    //grab the "back to top" link
        $back_to_top = $('.scroll-top');

    //hide or show the "back to top" link
    $(window).on('scroll', function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('scroll-top-visible') : $back_to_top.removeClass('scroll-top-visible scroll-top-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('scroll-top-fade-out');
        }

        /* affix the navbar after scroll below header */
        if ($(window).scrollTop() >= 1) {
            $(".navbar").addClass("affix");
        }else {
            $(".navbar").removeClass("affix");
        }
    });

    // Attach a delegated event handler
    $( ".web-sidebar-menu-inner" ).on( "click", ".scroll-top", function( event ) {
        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0
                }, scroll_top_duration
            );
        });
    });

    /*=================================*/
    /* Sub-menu  */
    /*=================================*/
    $('nav.main-navigation > ul > li').each(function(){
        $(this).find('.has-submenu').append('<i class="fa fa-angle-down"></i>');
    });

    /*=================================*/
    /* Mailchimp Subcription Form  */
    /*=================================*/
    $('.mailchimp').ajaxChimp({
        callback: mailchimpCallback,
        url: "//rkwebdesigns.us9.list-manage.com/subscribe/post?u=1b2bb2f327b56ba5d3c7c46e8&amp;id=57d1c9a1a8" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
    });

    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            $('.subscription-success').html('<i class="fa fa-check-circle-o"></i>' + resp.msg).fadeIn(1000);
            $('.subscription-error').fadeOut(500);
        } else if (resp.result === 'error') {
            $('.subscription-error').html('<i class="fa fa-times-circle-o"></i>' + resp.msg).fadeIn(1000);
        }
    }

    /*=================================*/
    /* CONTACT FORM  */
    /*=================================*/
    // Attach a delegated event handler
    $(document).on('submit', '#contact', function(e) {
        e.preventDefault();
        var name = $("#cf-name").val();
        var email = $("#cf-email").val();
        var subject = $("#cf-subject").val();
        var message = $("#cf-message").val();
        var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;

        function isValidEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        }
        if (isValidEmail(email) && (message.length > 1) && (name.length > 1)) {
            $.ajax({
                type: "POST",
                url: "phpmail/sendmail.php",
                data: dataString,
                success: function () {
                    $('.success').fadeIn(1000);
                    $('.error').fadeOut(500);
                }
            });
        }
        else {
            $('.error').fadeIn(1000);
            $('.success').fadeOut(500);
        }
        return false;
    });

    /*=================================*/
    /* Off Canvas Navigation  */
    /*=================================*/
    var offcanvas_open = false;
    var offcanvas_from_left = false;

    function offcanvas_right() {

        $(".web-sidebar-menu-container").addClass("web-slide-from-left wa-sidebar-menu-open");

        offcanvas_open = true;
        offcanvas_from_left = true;

        $(".web-sidebar-menu").addClass("open");
        $("body").addClass("offcanvas_open offcanvas_from_left");

        $(".nano").nanoScroller();

    }

    function offcanvas_close() {
        if (offcanvas_open === true) {

            $(".web-sidebar-menu-container").removeClass("web-slide-from-left wa-sidebar-menu-open");

            offcanvas_open = false;
            offcanvas_from_left = false;

            //$('#web-sidebar-menu-container').css('max-height', 'inherit');
            $(".web-sidebar-menu").removeClass("open");
            $("body").removeClass("offcanvas_open offcanvas_from_left");

        }
    }

    // Attach a delegated event handler
    $( ".header-right-toggle" ).on( "click", ".side-menu-button", function( event ) {
        offcanvas_right();
    });
    $("#web-sidebar-menu-container").on("click", ".web-sidebar-menu-overlay, .wa-close", function() {
        offcanvas_close();
    });

    /*=================================*/
    /* PRE LOADER  */
    /*=================================*/
    $(window).load(function() {
        $('.loader').delay(100).fadeOut('slow');
        $('.preloader').delay(500).fadeOut('slow');
        $('body').delay(500).css({
            'overflow': 'visible'
        });
    });

})(jQuery);



