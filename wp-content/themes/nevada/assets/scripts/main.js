(function($) {

    //subscribe form input on focus border-color change 
    $('.subscribe-email').on('focus', function () {
        $(this).parents().css('border-color', '#781241');
    });

    //subscribe form input on blur border-color set default
    $('.subscribe-email').on('blur', function () {
        $(this).parents().css('border-color', 'inherit');
    });

    //masonry media page
    var $grid = $('.masonry-block').imagesLoaded(function () {
        // init Masonry after all images have loaded
        $grid.masonry();
    });

    //Contact Form
    //label on focus
    $('.contact-us-form__field').on('focus', function () {
        $(this).parent().parent().find('.contact-us-form__label').addClass('contact-us-form__label--top');
    });

    //label on blur
    $('.contact-us-form__field').on('blur', function () {
        let inputval = $(this).val();
        
        if (inputval === '') {
            $(this).parent().parent().find('.contact-us-form__label').removeClass('contact-us-form__label--top');
        }
    });

    //burger menu
    $('.burger-menu').on('click', function () {
        $(this).toggleClass('open');
        $('body, html').toggleClass('hide');

        if ($('.burger-menu').hasClass('open')) {
            $('.main-nav__list').toggleClass('responsive');
        } else {
            $('.main-nav__list').toggleClass('responsive');
        }
    });

    //window resize
    $(window).on("resize load", function () {
        var viewportWidth = $(window).width();
        
        // closing burger when landscape mode switched
        if (viewportWidth > 769) {
            $('body, html').removeClass('hide');
            $('.burger-menu').removeClass('open');
            $('.main-nav__list').removeClass('responsive');

            // closing calendar when landscape mode switched
            $('.events__calendar').removeClass('responsive-calendar');
            $('.btn--calendar-close').css('display', 'none');

        } 

        //styling contats block on resize
        if (viewportWidth < 685) {
            $('.contacts__item--adress, .contacts__item--email').removeClass('separator--right');
            $('.contacts__item--adress, .contacts__item--email').addClass('separator--bottom');
        } else {
            $('.contacts__item--adress, .contacts__item--email').addClass('separator--right');
            $('.contacts__item--adress, .contacts__item--email').removeClass('separator--bottom');
        }

        //styling wine bottles on resize
        if (viewportWidth < 650) {
            $('.bottle-card__photo-wrapper').removeClass('separator--right');
            $('.bottle-card').removeClass('border--bottom');
        } else {
            $('.bottle-card__photo-wrapper').addClass('separator--right');
        } 
    });

    //validation subscribe form invalid
    $(".wpcf7").on('wpcf7:invalid', function() {
        $('.subscribe-form-content').css('border-color', '#f00');
    });

    //validation subscribe form success
    $(".wpcf7").on('wpcf7:mailsent', function() {
        $('.subscribe-form-content').css('border-color', '#398f14');

        if ($('.contact-us-form__field')) {
            let inputval = $(this).val();
            
            if (inputval === '') {
                $(this).parents().find('.contact-us-form__label').removeClass('contact-us-form__label--top');
            }
        }     
    });


    //responsive calendar open
    $('.btn--calendar').on('click', function() {
       $('.events__calendar').addClass('responsive-calendar');
       $('.calendar-navigation').append('<button class="btn btn--calendar-close"><i class="fas fa-times fa-lg"></i></button>');
       $('body, html').addClass('hide');
    });

    //responsive calendar close
    $('.btn--calendar-close').on('click', function() {
        $('.events__calendar').removeClass('responsive-calendar');
        $('body, html').removeClass('hide');
    });
    
})(jQuery);

