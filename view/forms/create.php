<?php

if ($_POST) {
    if (!empty($_POST['name']) and ! empty($_POST['pass'])) {
        $m = new Managed();
        $user = new Users();
        $user->name = $_POST['name'];
        $user->pass = encrypt($_POST['pass']);
        $m->insertUser($user);
    } else {
        echo '<script>Materialize.toast(\'Todos los datos deben estar llenos.\', 4000);</script>';
    }
}
?>

<div style="height: 100%">
    <div class="container">
        <div class="row">
            <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12" style="color: #B71C1C !important;">
                        <input id="name" name="name" type="text" class="validate">
                        <label for="name">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pass" name="pass" type="text" class="validate">
                        <label for="pass">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center">                        
                        <input type="submit" class="waves-effect waves-light btn-large  red darken-4" value="Crear Usuario"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
