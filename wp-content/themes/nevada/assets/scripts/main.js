(function($) {
  // Code...

    //subscribe form input on focus border-color change 
    $('.wpcf7-form-control').on('focus', function () {
        $(this).parents().css('border-color', '#781241');
    });
    //subscribe form input on blur border-color set default
    $('.wpcf7-form-control').on('blur', function () {
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
        $(this).parent().find('.contact-us-form__label').addClass('contact-us-form__label--top');
    })
    //label on blur
    $('.contact-us-form__field').on('blur', function () {
        let inputval = $(this).val();
        
        if (inputval === '') {
            $(this).parent().find('.contact-us-form__label').removeClass('contact-us-form__label--top');
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
        } 

        //styling contats block
        if (viewportWidth < 685) {
            $('.contacts__item--adress, .contacts__item--email').removeClass('separator--right');
            $('.contacts__item--adress, .contacts__item--email').addClass('separator--bottom');
        } else {
            $('.contacts__item--adress, .contacts__item--email').addClass('separator--right');
            $('.contacts__item--adress, .contacts__item--email').removeClass('separator--bottom');
        }

        //styling wine bottles
        if (viewportWidth < 650) {
            $('.bottle-card__photo-wrapper').removeClass('separator--right');
            $('.bottle-card').removeClass('border--bottom');
        } else {
            $('.bottle-card__photo-wrapper').addClass('separator--right');
        } 
    });

    //border color on invalid subscribe email form
    $('.wpcf7-submit').on('click', function () {
        let inputVal = $('.wpcf7-email').val();

        if (inputVal === '') {
            $(this).parents().css('border-color', '#f00');
        }

        if ($('span').hasClass('wpcf7-not-valid-tip')) {
            $(this).parents().css('border-color', '#f00')
        }
    })

    // init google map
    function initMap() {
        // The location of Uluru
        var uluru = { lat: 49.4240073, lng: 32.0652071 };
        // The map, centered at Uluru
        var map = new google.maps.Map(document.getElementById('map'), { zoom: 10, center: uluru });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({ position: uluru, map: map });
    }

})(jQuery);
