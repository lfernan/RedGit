<?php
$m = new Managed();
?>
<div class="row">
    <form class="col s12" action="data.php" method="post" enctype="multipart/form-data">        
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Nombre" id="name" type="text" class="validate">
                <label for="name">Nombre</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">event</i>
                <input placeholder="Edad" id="age" type="text" class="validate">
                <label for="age">Edad</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Foto de Perfil</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input id="nick-picture" class="file-path validate" type="text">
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Fotos</span>
                    <input id="pictures" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Subir uno o mas archivos">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">spa</i>
                <input placeholder="90-60-90" id="weight" type="text" class="validate">
                <label for="weight">Medidas</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input placeholder="Telefono" id="phone" type="text" class="validate">
                <label for="phone">Telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">grade</i>
                <select multiple id="services">    
                    <?php
                    $stmt = $m->getServices();
                    foreach ($stmt as $row) {
                        echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                    }
                    ?>                   
                </select>
                <label>Servicios</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">loyalty</i>
                <input placeholder="$" id="price" type="text" class="validate">
                <label for="price">Tarifa</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">query_builder</i>
                <input placeholder="Horarios de Atencion" id="schedules" type="text" class="validate">
                <label for="schedules">Horarios de Atencion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">comment</i>
                <textarea id="description" class="materialize-textarea" data-length="250"></textarea>
                <label for="description">Descripcion sobre ti</label>
            </div>
        </div>
        <div class="row">
            <span>Publica</span>
            <div class="switch">            
                <label>
                    NO
                    <input type="checkbox" id="pusblish" checked>
                    <span class="lever"></span>
                    SI
                </label>
            </div>
        </div>        
        <div class="row center-align">
            <a onclick="guardar()" class="waves-effect waves-light btn-large"><i class="material-icons left">check</i>Guardar</a>
        </div>
    </form>
</div>
<script>
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
        datos = datos + file +" "+ fileName +" "+ fileExtension +" "+ fileSize +" "+ fileType;
        alert(datos);
    }
</script>
