<?php
$m = new Managed();
?>
<div class="row">
    <form class="col s12" action="view/forms/save.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Nombre" id="name" name="name" type="text" class="validate">
                <label for="name">Nombre</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">event</i>
                <input placeholder="Edad" id="age" name="age" type="text" class="validate">
                <label for="age">Edad</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Foto de Perfil</span>
                    <!--input type="hidden" name="MAX_FILE_SIZE" value="30000"/-->
                    <input id="nick_picture" name="nick_picture" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Video</span>
                    <!--input type="hidden" name="MAX_FILE_SIZE" value="30000"/-->
                    <input id="video" name="video" type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Fotos</span>
                    <input id="pictures" name="pictures[]" type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Subir uno o mas archivos">
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">spa</i>
                <input placeholder="90-60-90" id="measures" name="measures" type="text" class="validate">
                <label for="measures">Medidas</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input placeholder="Telefono" id="phone" name="phone" type="text" class="validate">
                <label for="phone">Telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">room</i>
                <input id="location" name="location" type="text" class="validate">
                <label for="location">Zona</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input id="mail" name="mail" type="text" class="validate">
                <label for="mail">E-mail</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">grade</i>
                <select multiple id="services" name="services[]">    
                    <?php
                    $stmt = $m->getServices(null);
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
                <input placeholder="$" id="price" name="price" type="text" class="validate">
                <label for="price">Tarifa</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">query_builder</i>
                <input placeholder="Horarios de Atencion" id="schedules" name="schedules" type="text" class="validate">
                <label for="schedules">Horarios de Atencion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">comment</i>
                <textarea id="description" name="description" class="materialize-textarea" data-length="400"></textarea>
                <label for="description">Descripcion sobre ti</label>
            </div>
        </div>
        <div class="row">
            <span>Publica</span>
            <div class="switch">            
                <label>
                    NO
                    <input type="checkbox" id="publish" name="publish" checked>
                    <span class="lever"></span>
                    SI
                </label>
            </div>
        </div>        
        <div class="row center-align">            
            <!--a type="submit" onclick="guardar()" class="waves-effect waves-light btn-large"><i class="material-icons left">check</i>Guardar</a-->
            <input type="submit" class="waves-effect waves-light btn-large" value="Guardar"/>
        </div>
        <input type="submit" value="Submit"/>
    </form>
</div>
<script src="js/data.js"></script>
