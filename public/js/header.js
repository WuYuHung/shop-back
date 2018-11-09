// Header

// Smooth scrolling when clicking an another link
$(function () {
    $(document).on('click', 'a[href^="#"]:not([href="#"])', function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
    });
});

// let ios device do not click twice (not tested yet)
$('button, a').mouseenter(function () {
    let device = navigator.userAgent.toLowerCase();
    let ios = device.match(/(iphone|ipod|ipad)/);

    if (ios) {
        $(this).click();
    }
});
