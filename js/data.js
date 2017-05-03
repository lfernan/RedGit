$(document).ready(function () {
    $('#weight').mask("00-00-00", {placeholder: "90-60-90"});
    $('#price').mask("00000", {placeholder: "$"});
});

function guardar() {
    $(".lever").click(function () {
        alert("Handler for .change() called.");
    });
    var datos = "";
    datos = datos + $('#name').val() + " ";
    datos = datos + $('#age').val() + " ";
    datos = datos + $('#weight').val() + " ";
    datos = datos + $('#phone').val() + " ";
    datos = datos + $('#services').val() + " ";
    datos = datos + $('#price').val() + " ";
    datos = datos + $('#schedules').val() + " ";
    datos = datos + $('#description').val() + " ";
    datos = datos + $('#publish').attr(':checked') + " ";
    //obtenemos un array con los datos del archivo
    var file = $("#pictures")[0].files[0];
    //obtenemos el nombre del archivo
    var fileName = file.name;
    //obtenemos la extensión del archivo
    fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
    //obtenemos el tamaño del archivo
    var fileSize = file.size;
    //obtenemos el tipo de archivo image/png ejemplo
    var fileType = file.type;
    datos = datos + file + " " + fileName + " " + fileExtension + " " + fileSize + " " + fileType;
    alert(datos);

    // enable fileupload plugin
    //$('input[name="files"]').fileuploader({
    $('#upload').fileuploader({
        upload: {
            url: 'core/ajax_upload_file.php',
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: function (item) {                
                // set the POST field
                    item.upload.data.custom_name = "CambioNombre";

            },
            onSuccess: function (result, item) {
                var data = JSON.parse(result),
                        nameWasChanged = false;

                // get the new file name
                if (data.isSuccess && data.files[0]) {
                    nameWasChanged = item.name != data.files[0].name;

                    item.name = data.files[0].name;
                }

                // make HTML changes
                if (nameWasChanged)
                    item.html.find('.column-title div').animate({opacity: 0}, 400);
                item.html.find('.column-actions').append('<a class="fileuploader-action fileuploader-action-remove fileuploader-action-success" title="Remove"><i></i></a>');
                setTimeout(function () {
                    item.html.find('.column-title div').attr('title', item.name).text(item.name).animate({opacity: 1}, 400);
                    item.html.find('.progress-bar2').fadeOut(400);
                }, 400);
            },
            onError: function (item) {
                var progressBar = item.html.find('.progress-bar2');

                // make HTML changes
                if (progressBar.length > 0) {
                    progressBar.find('span').html(0 + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
                    item.html.find('.progress-bar2').fadeOut(400);
                }

                item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                        '<a class="fileuploader-action fileuploader-action-retry" title="Retry"><i></i></a>'
                        ) : null;
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-bar2');

                // make HTML changes
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('span').html(data.percentage + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
            },
            onComplete: null,
        },
        onRemove: function (item) {
            // send POST request
            $.post('./php/ajax_remove_file.php', {
                file: item.name
            });
        }
    });

}