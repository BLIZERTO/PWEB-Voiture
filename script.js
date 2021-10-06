$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
            $('.wrapper').addClass('active');
        } else {
            $('.navbar').removeClass('active');
            $('.wrapper').removeClass('active');
        }
    });
});
