<?php
if ($_POST) {
    if (!empty($_POST['data']) and ! empty($_POST['pass'])) {
        $m = new Managed();
        $o = $m->getLogin($_POST['data'], encrypt($_POST['pass']));
        if ($o == null) {
            echo 'Materialize.toast(\'Usuario o clave incorrectos.\', 4000)';
        } else {
            if ($_POST['sesion']) {
                ini_set('session.cookie_lifetime', time() + (60 * 60 * 24));
            }
            $_SESSION['user'] = $o;
            echo 1;
        }
    } else {
        echo 'Materialize.toast(\'Todos los datos deben estar llenos.\', 4000)';
    }
}
?>
<div class=" blue-grey darken-4" style="height: 100%">
<div class="container">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12" style="color: #B71C1C !important;">
                    <input id="data" type="text" class="validate">
                    <label for="data">Usuario o Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="pass" type="password" class="validate">
                    <label for="pass">Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    <a class="waves-effect waves-light btn-large  red darken-4"><i class="material-icons left">cloud</i>Entrar</a>
                </div>
            </div>
        </form>
    </div>
</div>
    </div>
