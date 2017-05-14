$(document).ready(function () {
    $('#weight').mask("00-00-00", {placeholder: "90-60-90"});
    $('#price').mask("00000", {placeholder: "$"});
});

function guardar() {
    var datos = "";
    /*datos = datos + "name="+ $('#name').val() + "&";
    datos = datos + "age="+ $('#age').val() + "&";
    datos = datos + "weight="+ $('#weight').val() + "&";
    datos = datos + "phone="+ $('#phone').val() + "&";
    datos = datos + "services="+ $('#services').val() + "&";
    datos = datos + "price="+ $('#price').val() + "&";
    datos = datos + "schedules="+ $('#schedules').val() + "&";
    datos = datos + "description="+ $('#description').val() + "&";
    datos = datos + "publish="+ document.getElementById("pusblish").checked ? "true" : "false";    */
    datos = datos + "nick-picture=" + $('#nick-picture')[0].files[0];
    
    alert(datos);

    /*$.ajax({
        url: "save.php",
        type: "POST",
        data: new FormData(datos),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data){
            $('#loading').hide();
            $("#message").html(data);
        }
    });*/
}