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
            //Materialize.toast('I am a toast!', 4000);
        }
    });

    $('.bxslider').bxSlider({
        onSliderLoad: function () {
            var contenido = $('#contenido');
            $('#colmensajes').css("height", contenido.height() + "px");
            $('#mensajes').css("height", contenido.height() + "px");
            $('.bx-wrapper .bx-viewport').css("height", contenido.height() - 50 + "px");
        },
        minSlides: 4,
        maxSlides: 40,
        ticker: true,
        speed: 10000,
        mode: 'vertical',
        tickerHover: true,
        adaptiveHeight: true
    });

    $('select').material_select();
    $('textarea').characterCounter();
});


function galeria(index, token) {
    $('<div id="overlaygallery" class="overlay"></div>').appendTo('body');
    $("#overlaygallery").load("ajax.php", {index: index, token: token, mode: 1});
}