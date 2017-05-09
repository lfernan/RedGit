<?php
$m = new Managed();
?>
<!--div class="row">
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
                <select multiple id="services"-->    
<!--?php
$stmt = $m->getServices();
foreach ($stmt as $row) {
    echo '<option value="' . $row->id . '">' . $row->name . '</option>';
}
?-->                   
<!--/select>
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
</div-->
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
          <input type = "file" name = "image" multiple/>
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>
