<?php
if (!isset($_SESSION['user'])) {
    header('location: ?view=login');
}

$user = new Users();
$user->id = $_SESSION['user']->id;
$m = new Managed();
$dir = $_SERVER["DOCUMENT_ROOT"] . '/RedGit/uploads/';
$nick = null;
$album = null;
$video = null;
$id_dir = null;
$nombre = null;

if ($_POST) {
    if (isset($_FILES["nick_picture"])) {
        $user->name = $_POST['name'];
        $user->public_phone = $_POST['phone'];
        $user->description = $_POST['description'];
        $user->age = $_POST['age'];
        $user->measures = $_POST['measures'];
        $user->schedules = $_POST['schedules'];
        $user->price = $_POST['price'];
        $user->location = $_POST['location'];
        $user->mail = $_POST['mail'];
        $user->published = 1;

        if ($_FILES["nick_picture"]["size"] > 0) {
            $id_dir = uniqid() . "/";
            $nick = $dir . $id_dir;
            mkdir($nick);
            $nombre = uniqid() . getExtension($_FILES["nick_picture"]["tmp_name"]);
            move_uploaded_file($_FILES["nick_picture"]["tmp_name"], $nick . $nombre);
            $user->nick = "uploads/" . $id_dir . $nombre;
            if ($_FILES["video"]["size"] > 0) {
                mkdir($nick . "video");
                $video = $nick . "video/" . $_FILES["video"]["name"];
                $user->video = "uploads/" . $id_dir . "video/" . $_FILES["video"]["name"];
                move_uploaded_file($_FILES["video"]["tmp_name"], $video);
            }
        }

        if ($_FILES['pictures']['size'] > 0) {
            $album = $nick . "album/";
            mkdir($album);
            foreach ($_FILES['pictures']['error'] as $clave => $error) {
                $nombre_tmp = $_FILES["pictures"]["tmp_name"][$clave];
                $nombre = uniqid() . getExtension($_FILES["pictures"]["tmp_name"][$clave]);
                $user->album = "uploads/" . $id_dir . "album/";
                move_uploaded_file($nombre_tmp, $album . $nombre);
            }

            $m->editUser($user);
            if (isset($_POST['services'])) {
                $services = $_POST['services'];
                for ($i = 0; $i < count($services); $i++) {
                    $m->insertUserService($user->id, $services[$i]);
                }
            } else {
                $m->insertUserService($user->id, 1);
            }
        }
    }
}
?>
<style>
    body{
        background-color: #263238 !important;
    }
</style>
<div class="container">
    <div class="row">
        <form class="col s12" action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input  id="name" name="name" type="text" class="validate" required="true">
                    <label for="name">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">event</i>
                    <input  id="age" name="age" type="text" class="validate" required="true">
                    <label for="age">Edad</label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto de Perfil</span>
                        <!--input type="hidden" name="MAX_FILE_SIZE" value="30000"/-->
                        <input id="nick_picture" name="nick_picture" type="file" required="true">
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
                        <input id="pictures" name="pictures[]" type="file" multiple required="true">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Subir uno o mas archivos">
                    </div>
                </div>
            </div>        
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">spa</i>
                    <input id="measures" name="measures" type="text" class="validate" required="true">
                    <label for="measures">Medidas ej. 90-60-90</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="phone" name="phone" type="text" class="validate" required="true">
                    <label for="phone">Telefono</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">room</i>
                    <input id="location" name="location" type="text" class="validate" required="true">
                    <label for="location">Zona</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="mail" name="mail" type="email" class="validate">
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
                    <input id="schedules" name="schedules" type="text" class="validate" required="true">
                    <label for="schedules">Horarios de Atencion</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">comment</i>
                    <textarea id="description" name="description" required="true" class="materialize-textarea" data-length="400"></textarea>
                    <label for="description">Descripcion sobre ti</label>
                </div>
            </div>
            <!--div class="row">
                <span>Publica</span>
                <div class="switch">            
                    <label>
                        NO
                        <input type="checkbox" id="publish" name="publish" checked>
                        <span class="lever"></span>
                        SI
                    </label>
                </div>
            </div-->        
            <div class="row center-align">            
                <!--a type="submit" onclick="guardar()" class="waves-effect waves-light btn-large"><i class="material-icons left">check</i>Guardar</a-->
                <input type="submit" class="waves-effect waves-light btn-large" value="Guardar"/>
            </div>
        </form>
    </div>
</div>
<script src="js/data.js"></script>
