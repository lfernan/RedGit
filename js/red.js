    $(document).ready(function () {
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        //var $toastContent = $('<span>I am toast content</span>');
        //Materialize.toast($toastContent, 5000);
        /*$('.modal').modal({
         dismissible: true, // Modal can be dismissed by clicking outside of the modal
         opacity: .5, // Opacity of modal background
         inDuration: 300, // Transition in duration
         outDuration: 200, // Transition out duration
         startingTop: '4%', // Starting top style attribute
         endingTop: '10%', // Ending top style attribute
         ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
         $('.modal-overlay').remove();
         console.log(modal, trigger);
         },
         complete: function () {
         //alert('Closed'); 
         } // Callback for Modal close
         }
         );*/
        
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

        $('#mensajes').flexslider({
                    animation: "slide",
                    direction: "vertical",
                    minItems:4,
                    directionNav: false,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
        });
    });