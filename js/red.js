$(document).ready(function () {
    $('.carousel.carousel-slider').carousel({fullWidth: true});    

    $('#modal1').modal({complete: function () {
            $("#todos").click();
        }});

    $('.gallery-expand').galleryExpand({
        onShow: function (el) {
            // Carousel
            var carousel = el.find('.carousel.initialized');
            carousel.carousel({
                dist: 0,
                padding: 10
            });
            // Tabs
            $('ul.tabs').tabs();
            Materialize.toast('I am a toast!', 4000);
        }
    });

    $('.materialboxed').materialbox();

    $('.slider').slider();    

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