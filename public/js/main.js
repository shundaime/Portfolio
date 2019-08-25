"use strict";

$(document).ready(function () {
    $('.modal-opener').on('click', function (e) {
        var id = $(this).data('id');
        $('#' + id).modal('show');
    });

    $('.scrollTo').click(function (event) {
        event.preventDefault();
        event.stopPropagation();
        var url = $(this).attr('href');
        var hash = url.substring(url.indexOf('#'));
        $('html, body').animate({scrollTop: $(hash).offset().top}, 750);
    });

    $("nav a").on("click", function (event) {
        event.preventDefault();

        var href = $(this).attr("href");

        window.history.pushState(null, null, href);

        $("nav a").removeClass("active");
        $(this).addClass("active");
    });

    /*REVEAL JS*/

    const ratio = .3;
    const options = {
        root : null,
        rootMargin: '0px',
        threshold: ratio
    };

    const handleIntersect = function (entries, observer) {
        entries.forEach(function (entry) {
            if(entry.intersectionRatio > ratio){
                entry.target.classList.remove('reveal');
                observer.unobserve(entry.target)
            }
        })
    };

    document.documentElement.classList.add('reveal-loaded');
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('.reveal').forEach(function (r) {
        observer.observe(r)
    });
});

$(window).on('load', function () {
   $('#overlay').fadeOut('1500');
});

$(window).scroll(function () {
    scrollToTop();
    stopAnimation();
});

function scrollToTop() {
    var s = $(window).scrollTop();
    s > 350 ? $('.scrollup').fadeIn() : $('.scrollup').fadeOut(); //Ternaire

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
        return false;
    });
}

function stopAnimation() {
    $("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function () {
        $('html, body').stop();
    });
}
