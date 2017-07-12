$(document).ready(function () {
    $('#measures').mask("00-00-00");
    //$('#price').mask("00000", {placeholder: "$"});
});

/*$('#form').submit(function (event) {
    console.log('submit');
    var form = new FormData(this);
    form.append('services',$('#services').val());
    form.append('publish', document.getElementById("publish").checked ? true : false)
    console.log(form);
});*/

function guardar() {
    $( "#formulario" ).submit();
    /*var datos = {
        name: $('#name').val(),
        age: $('#age').val(),
        phone: $('#phone').val(),
        services: $('#services').val(),
        price: $('#price').val(),
        schedules: $('#schedules').val(),
        description: $('#description').val(),
        publish: document.getElementById("publish").checked ? true : false,
        nick_picture: $('#nick-picture')[0].files[0],
        pictures: $('#pictures')[0].files
    };

    $.ajax({
        method: "POST",
        url: "view/forms/save.php",
        data: {publish: true,nick_picture: $('#nick-picture')[0].files[0]}
    }).done(function (msg) {
        alert("Data Saved: " + msg);
    });*/
}