<?php
include_once 'core/core.php';
if ($_POST) {
    echo 'POST';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <!-- Lato Font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheet -->
        <link href="css/gallery-materialize.min.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet" href="css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/red.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        <script src="js/libraries/imagesloaded.pkgd.min.js"></script>
        <script src="js/libraries/masonry.pkgd.min.js"></script>
        <script src="js/libraries/color-thief.min.js"></script>
        <script src="js/libraries/galleryExpand.js"></script>
        <script src="js/libraries/init.js"></script>
        <script src="js/libraries/jquery.flexslider-min.js"></script>
        <script src="js/libraries/jquery.bxslider.js"></script>
        <script src="js/libraries/jquery.mask.min.js"></script>        
        <script src="js/libraries/blueimp-gallery.min.js"></script>
        <script src="js/red.js"></script>
        <script type="text/javascript" src="test.js"></script>
    </head>
    <body>
        <?php
        $m = new Managed();
        ?>
        <div class="row">
            <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="row">
                        <!--form class="col s12" action="view/forms/save.php" method="post" enctype="multipart/form-data"-->
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
                        <!--/form-->
                    </div>
                </div>
            </form>
    </body>
</html>
