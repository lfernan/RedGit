<?php
$m = new Managed();
?>
<div class="row">
    <form class="col s12">        
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Nombre" id="name" type="text" class="validate">
                <label for="name">Nombre</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Edad" id="age" type="text" class="validate">
                <label for="age">Edad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Medidas" id="scheludes" type="text" class="validate">
                <label for="scheludes">Medidas</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input placeholder="Telefono" id="phone" type="text" class="validate">
                <label for="phone">Telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select multiple>    
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
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" data-length="250"></textarea>
                <label for="description">Descripcion sobre ti</label>
            </div>
        </div>
        <span>Publica</span>
        <div class="switch">            
            <label>
                NO
                <input type="checkbox">
                <span class="lever"></span>
                SI
            </label>
        </div>
    </form>
</div>
