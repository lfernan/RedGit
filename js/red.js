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
            Materialize.toast('I am a toast!', 4000);
        }
    });

    $('.bxslider').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        ticker: true,
        speed: 10000,
        mode: 'vertical'
    });

    $('select').material_select();
    $('textarea').characterCounter();
});

function galeria(n) {
    console.log(n);
    $('<div id="overlaygallery" class="overlay"></div>').appendTo('body');
    $("#overlaygallery").load("./view/gallery.php", {n: n});
}