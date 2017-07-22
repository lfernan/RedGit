$(document).ready(function () {
    $('#modal1').modal({complete: function () {
            $("#todos").click();
        }});

    $('.gallery-expand').galleryExpand({
        onShow: function (el) {
            var carousel = el.find('.carousel.initialized');
            carousel.carousel({
                dist: 0,
                padding: 10,
                indicators: true,
                fullWidth: true
            });
            //resizeMessage();
        }
    });

    $('.bxslider').bxSlider({
        onSliderLoad: function () {
            //resizeMessage();
        },
        minSlides: 4,
        maxSlides: 4,
        ticker: true,
        speed: 10000,
        mode: 'vertical',
        tickerHover: true,
        adaptiveHeight: true
    });

    $('select').material_select();
    $('textarea').characterCounter();
});

$(window).resize(function () {
    //resizeMessage();
});

function resizeMessage() {
    var contenido = $('#contenido');
    $('#colmensajes').css("height", contenido.height() + "px");
    $('#mensajes').css("height", contenido.height() + "px");
    $('.bx-wrapper .bx-viewport').css("height", contenido.height() - 50 + "px");
}

function galeria(index, token) {
    $('<div id="overlaygallery" class="overlay"></div>').appendTo('body');
    $("#overlaygallery").load("ajax.php", {index: index, token: token, mode: 1});
}