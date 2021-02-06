(function () {
    var w = window;
    if (w.ChannelIO) {
        return (window.console.error || window.console.log || function () {})(
            'ChannelIO script included twice.'
        );
    }
    var ch = function () {
        ch.c(arguments);
    };
    ch.q = [];
    ch.c = function (args) {
        ch.q.push(args);
    };
    w.ChannelIO = ch;
    function l() {
        if (w.ChannelIOInitialized) {
            return;
        }
        w.ChannelIOInitialized = true;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
        s.charset = 'UTF-8';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    }
    if (document.readyState === 'complete') {
        l();
    } else if (window.attachEvent) {
        window.attachEvent('onload', l);
    } else {
        window.addEventListener('DOMContentLoaded', l, false);
        window.addEventListener('load', l, false);
    }
})();
ChannelIO('boot', {
    pluginKey: '02fa62d4-0973-44f2-852d-f3d1016ae926',
});

// 이미지 미리다운
function preloading(imageArray) {
    let n = imageArray.length;
    for (let i = 0; i < n; i++) {
        let img = new Image();
        img.src = imageArray[i];
    }
}
preloading(['../img/main/play.png']);

$(document).ready(function () {
    // 메인 랜딩 비쥬얼 슬라이더
    $visualPrev = document.querySelector('.landing-banner .prev');
    $visualNext = document.querySelector('.landing-banner .next');

    $('.landing-banner .slide-wrap').slick({
        prevArrow: $visualPrev,
        nextArrow: $visualNext,
        cssEase: 'ease-out',
        lazyLoad: 'ondemand',
        dots: true,
        fade: true,
        speed: 1000,
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
    });

    $('.landing-banner .slick-dots').append(
        '<div class="visual-play-stop"><button aria-pressed="false"><span class="blind">자동슬라이드토글버튼</span><i></i></button></div>'
    );

    $(document).on('click', '.visual-play-stop button', function () {
        if ($(this).attr('aria-pressed') == 'false') {
            $(this).attr('aria-pressed', 'true');
            $('.landing-banner .slide-wrap').slick('slickPause');
        } else {
            $(this).attr('aria-pressed', 'false');
            $('.landing-banner .slide-wrap').slick('slickPlay');
        }
    });

    // 모바일메뉴 드롭다운 (dept-1)
    $('.gnb .menu .item a').click(function (e) {
        if ($(window).width() < 960) {
            let dataValue = $(this).data('order');
            let selector = '.dropdown-content[data-order=' + dataValue + ']';
            let arrow = '.gnb .dropdown .item .arrow.down[data-order=' + dataValue + ']';

            $('.dropdown-content').not(selector).removeClass('active');
            $('.gnb .dropdown .item .arrow.down').not(arrow).removeClass('active');

            $(selector).toggleClass('active');
            $(arrow).toggleClass('active');
        }
    });

    // 모바일 햄버거 메뉴
    document.querySelector('.gnb .hamberger').addEventListener('click', function () {
        this.classList.toggle('active');
        $('.gnb .menu').toggleClass('active');
        $('.wrap').toggleClass('active');
    });

    // 진행 중인 강좌
    $('.card-carousel .card-deck').slick({
        prevArrow: false,
        nextArrow: false,
        dots: false,
        infinite: true,
        fade: false,
        speed: 600,
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        centerMode: false,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    rows: 1,
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 560,
                settings: {
                    rows: 1,
                    slidesToShow: 1,
                },
            },
        ],
    });
    $('.card-carousel .control .prev').click(function () {
        $('.card-carousel .card-deck').slick('slickPrev');
    });
    $('.card-carousel .control .next').click(function () {
        $('.card-carousel .card-deck').slick('slickNext');
    });

    // 이번주 인기강좌 배너

    $('.hot-lect .banner-slide').slick({
        prevArrow: false,
        nextArrow: false,
        infinite: true,
        cssEase: 'ease-out',
        dots: true,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: true,
        centerMode: false,
    });

    // 리뷰
    $reviewPrev = document.querySelector('.review .slider-wrap .prev');
    $reviewNext = document.querySelector('.review .slider-wrap .next');
    $review2Prev = document.querySelector('.review .control .prev');
    $review2Next = document.querySelector('.review .control .next');
    if ($(window).width() > 1400) {
        $('.review .card-deck').slick({
            prevArrow: $reviewPrev,
            nextArrow: $reviewNext,
            infinite: true,
            cssEase: 'ease-out',
            dots: false,
            fade: false,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 2,
            autoplay: false,
            draggable: true,
            centerMode: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        rows: 1,
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 900,
                    settings: {
                        rows: 1,
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 560,
                    settings: {
                        rows: 1,
                        slidesToShow: 2,
                    },
                },
            ],
        });
    } else {
        $('.review .card-deck').slick({
            prevArrow: $review2Prev,
            nextArrow: $review2Next,
            infinite: true,
            cssEase: 'ease-out',
            dots: false,
            fade: false,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 2,
            autoplay: false,
            draggable: true,
            centerMode: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        rows: 1,
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 900,
                    settings: {
                        rows: 1,
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 560,
                    settings: {
                        rows: 1,
                        slidesToShow: 2,
                    },
                },
            ],
        });
    }

    // 강사 소개페이지 띠 배너
    $('.bar-banner .banner-slide').slick({
        prevArrow: false,
        nextArrow: false,
        infinite: true,
        cssEase: 'ease-out',
        dots: false,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: true,
        centerMode: false,
    });

    // 강좌 소개 메인 배너
    $('.course-top-banner').slick({
        prevArrow: false,
        nextArrow: false,
        cssEase: 'ease-out',
        lazyLoad: 'ondemand',
        dots: true,
        fade: true,
        speed: 1000,
        pauseOnFocus: false,
        pauseOnHover: false,
        draggable: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
    });
});
