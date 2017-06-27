function post() {
    /*console.log($('#name').val());
    console.log($('#age').val());
    console.log($('#phone').val());
    console.log($('#services').val());
    console.log($('#price').val());
    console.log($('#schedules').val());
    console.log($('#description').val());*/
    //console.log(document.getElementById("publish").checked ? true : false);
    //console.log($('#nick-picture')[0].files[0]);
    //console.log($('#pictures')[0].files);
    $.ajax({
        // la URL para la petición
        url: 'test.php',

        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data: {id: 1},

        // especifica si será una petición POST o GET
        type: 'GET',

        // el tipo de información que se espera de respuesta
        dataType: 'text/html',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success: function (json) {
            $('<h1/>').text(json.title).appendTo('body');
            $('<div class="content"/>')
                    .html(json.html).appendTo('body');
            console.log(json);
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
        // de la petición y un texto con la descripción del error que haya dado el servidor
        error: function (jqXHR, status, error) {
            console.log(jqXHR);
            console.log(status);
            console.log(error);
            //alert('Disculpe, existió un problema');
        },

        // código a ejecutar sin importar si la petición falló o no
        complete: function (jqXHR, status) {
            console.log(jqXHR);
            console.log(status);
            //alert('Petición realizada');
        }
    });
}

function __(id) {
    return document.getElementById(id);
}

