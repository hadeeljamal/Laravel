(function ($) {


    $('.play-video').on('click', function(event) {
        event.preventDefault();
        var $that     = $(this),
            type    = $that.data('type'),
            videoUrl  = $that.attr('href'), $video;

        if ( type === 'youtube' ) {
            $video = '<iframe id="video-player" src="https://www.youtube.com/embed/' + videoUrl + '?rel=0&amp;showinfo=0&amp;controls=1&amp;autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        }
        else if ( type === 'vimeo' ) {
            $video = '<iframe id="video-player" src="//player.vimeo.com/video/' + videoUrl + '?autoplay=1&color=ffffff&title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        } else if ( type === 'self' ) {
            $video = '<video id="video-player" controls autoplay> <source src="'+ videoUrl +'">Your browser does not support the video tag.</video>';
        } else if ( type === 'imdb' ) {
            $video = '<div class="embed-responsive embed-responsive-16by9"><iframe id="video-player" class="embed-responsive-item" src="http://m.imdb.com/video/imdb/'+ videoUrl +'/imdb/embed?autoplay=true&width=854" width="854" height="480" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" frameborder="no" scrolling="no"></iframe></div>';
        }
        $('.video-list').slideUp();
        $('#moview-player .video-container').find('#video-player').remove();
        $('#moview-player .video-container').prepend( $video );
        $('#moview-player .video-container').fadeIn();
    });


    $('.video-close').on('click', function(event) {
        event.preventDefault();
        $('.video-container').fadeOut(600, function(){
            $('#video-player').remove();
        });
    });

    $('.video-list-button').on('click', function(event) {
        event.preventDefault();
        $('.video-list').slideToggle();
    });




    $('.catOpenBtn').on('click',function (){
        if($('.cat-menu').hasClass('open')){
            $('.cat-menu').removeClass('open');
        }else{
            $('.cat-menu').addClass('open');
        }
    });
    var homeswiper = new Swiper('.homeSwiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.homeSwiper .swiper-button-next',
            prevEl: '.homeSwiper .swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    });
    var AdsSwiper = new Swiper('.AdsSwiper', {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.AdsSwiper .swiper-pagination',
            type: 'bullets',
        },
    });

    var swiper2 = new Swiper('.product-swiper', {
        slidesPerView: 3,
        spaceBetween: 50,

        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
    var partnersSwiper = new Swiper('.partners-swiper', {
        slidesPerView: 5,
        spaceBetween: 40,

        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 35,
            },
        },
    });

    var CatsSwiper = new Swiper('.CatsSwiper', {
        slidesPerView: 9,
        spaceBetween: 20,

        loop: true,
        pagination: {
            el: '.CatsSwiper .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 5,
            },
            1024: {
                slidesPerView: 7,
            },
        },
    });
    var BrandsSwiper = new Swiper('.BrandsSwiper', {
        slidesPerView: 5,
        spaceBetween: 20,

        loop: true,
        pagination: {
            el: '.BrandsSwiper .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });

    var toolsSwiper = new Swiper('.toolsSwiper', {
        slidesPerView: 4,
        spaceBetween: 15,

        loop: true,
        pagination: {
            el: '.toolsSwiper .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });
    var toolsSwiper2 = new Swiper('.toolsSwiper2', {
        slidesPerView: 4,
        spaceBetween: 15,

        loop: true,
        pagination: {
            el: '.toolsSwiper2 .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });

    var PackagesSwiper = new Swiper('.PackagesSwiper', {
        slidesPerView: 2,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: '.PackagesSwiper .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
        },
    });
    var PackagesSwiper2 = new Swiper('.PackagesSwiper2', {
        slidesPerView: 2,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: '.PackagesSwiper2 .swiper-pagination',
            type: 'bullets',
        },

        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
        },
    });

    var teamSwiper = new Swiper('.team-swiper, .teamSwiper', {
        slidesPerView: 4,
        spaceBetween: 25,

        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });

    var productsSwiper = new Swiper('.products-swiper', {
        slidesPerView: 3,
        spaceBetween: 15,

        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    $(document).on('click', '.navbar-toggler', function () {
        if($('.mobile-menu').hasClass('open')){
            $('.mobile-menu').removeClass('open');
        }else{
            $('.mobile-menu').addClass('open');
        }
    });
    $(document).on('click', '.addShipping .btn', function () {
        $('.shipping-address-form').fadeIn();
        $('.shipping-addresses').hide();
    });
    $(document).on('click', '.CancelShipping', function () {
        $('.shipping-address-form').hide();
        $('.shipping-addresses').fadeIn();
    });
    $(document).on('click', '.close-menu', function () {
        $('.mobile-menu').removeClass('open');
    });

    $(document).on('click', '.my-account-tab>a', function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('.tab-account-pan').hide();
        $('.tab-account-pan'+target).fadeIn();
        $('.my-account-tab>a').removeClass('active');
        $(this).addClass('active');

    });  $(document).on('click', '.searchBtn', function (e) {
        e.preventDefault();
        if($(this).hasClass('active')){
            $('header .search-block').hide();
            $(this).removeClass('active');
        }else{
            $('header .search-block').fadeIn();
            $(this).addClass('active');
        }

    });
    $(document).on('click', '.btnNextStep', function (e) {
        e.preventDefault();
        var target = $(this).data('step');
        $('.form-step').removeClass('active');
        $('.form-step#'+target).addClass('active');

    });  $(document).on('click', '.searchBtn', function (e) {
        e.preventDefault();
        if($(this).hasClass('active')){
            $('header .search-block').hide();
            $(this).removeClass('active');
        }else{
            $('header .search-block').fadeIn();
            $(this).addClass('active');
        }

    });

    var productSwiper = new Swiper(".productSwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var productSwiper2 = new Swiper(".productSwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: productSwiper,
        },
    });

})(jQuery);
