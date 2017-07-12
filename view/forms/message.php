<?php

if (!isset($_SESSION['user'])) {
    header('location: ?view=login');
}

$user = $_SESSION['user'];

$m = new Managed();

if($_POST){
    //if(!isset($_POST["description"]) and !empty($_POST['descripcion'])){           
        $m->addMessage($user->id,$_POST['description']);
    //}else{
        //echo '<script>Materialize.toast(\'Ingrese una mensaje.\', 4000);</script>';
    //}
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
                <div class="input-field col s12">
                    <i class="material-icons prefix">comment</i>
                    <textarea id="description" name="description" class="materialize-textarea validate" data-length="100"></textarea>
                    <label for="description">Escriba el mensaje</label>
                </div>
            </div>
            <div class="row center-align">                            
                <input type="submit" class="waves-effect waves-light btn-large" value="Guardar"/>
            </div>
        </form>
    </div>
</div>