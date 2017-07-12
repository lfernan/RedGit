<?php
if ($_POST) {
    if (!empty($_POST['data']) and ! empty($_POST['pass'])) {        
        $m = new Managed();
        $o = $m->getLogin($_POST['data'], $_POST['pass']);                
        if ($o == null) {
            echo '<script>Materialize.toast(\'Usuario o clave incorrectos.\', 4000);</script>';
        } else {
            if ($_POST['sesion']) {
                ini_set('session.cookie_lifetime', time() + (60 * 60 * 24));
            }
            $_SESSION['user'] = $o;
            header('location: index.php');
        }
    } else {
        echo '<script>Materialize.toast(\'Todos los datos deben estar llenos.\', 4000);</script>';
    }
}
?>
<!--div class=" blue-grey darken-4" style="height: 100%"-->
<div style="height: 100%">
    <div class="container">
        <div class="row">
            <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12" style="color: #B71C1C !important;">
                        <input id="data" name="data" type="text" class="validate">
                        <label for="data">Usuario o Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pass" name="pass" type="password" class="validate">
                        <label for="pass">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center">                        
                        <input type="submit" class="waves-effect waves-light btn-large  red darken-4" value="Entrar"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
