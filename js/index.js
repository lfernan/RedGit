jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});

$(function () {
    $('.adsense_btn_close').click(function () {
        $(this).closest('.adsense_fixed').css('display', 'none');
    });

    $('.adsense_btn_info').click(function () {
        if ($('.adsense_info_content').is(':visible')) {
            $('.adsense_info_content').css('display', 'none');
        } else {
            $('.adsense_info_content').css('display', 'block');
        }
    });

});

(function ($) {
    $(".menu-icon").on("click", function () {
        $(this).toggleClass("open");
        $(".header").toggleClass("nav-open");
        $("nav ul li").toggleClass("animate");
    });

})(jQuery);

function loadPage(p) {
    if (p == 2) {
        $('#contenedor').load('view/mobile/gallery.php');
    } else {
        $('#contenedor').load(p);
    }
    return false;
}

function __(id) {
    return document.getElementById(id);
}