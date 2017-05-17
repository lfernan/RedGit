<?php
require_once '../../model/managed/Managed.php';
require_once '../../model/entities/Users.php';
$dir = $_SERVER["DOCUMENT_ROOT"] . '/RedGit/uploads/';
$dir_nick_picture = null;
$dir_pictures = null;
$id_dir = null;

if (isset($_FILES["nick-picture"])) {
    $m = new Managed();
    $user = new Users();
    $user->name = $_POST['name'];
    $user->public_phone = $_POST['phone'];    
    $user->description = $_POST['description'];
    $user->age = $_POST['age'];
    $user->measures = $_POST['measures'];
    $user->height = $_POST['height'];
    $user->weight = $_POST['weight'];
    $user->schedules = $_POST['schedules'];
    $user->published = 1;

    if ($_FILES["nick-picture"]["error"] > 0) {
        echo 'Error ' . $_FILES["file"]["error"] . "<br>";
    } else {
        $id_dir = uniqid() . "/";
        $dir_nick_picture = $dir . $id_dir;
        mkdir($dir_nick_picture);
        $user->nick_picture = $dir_nick_picture . $_FILES["nick-picture"]["name"];
        move_uploaded_file($_FILES["nick-picture"]["tmp_name"], $dir_nick_picture . $_FILES["nick-picture"]["name"]);
    }

    if ($_FILES['pictures']['size'] > 0) {
        $dir_pictures = $dir_nick_picture . "album/";
        mkdir($dir_pictures);
        foreach ($_FILES['pictures']['error'] as $clave => $error) {
            $nombre_tmp = $_FILES["pictures"]["tmp_name"][$clave];
            $nombre = basename($_FILES["pictures"]["name"][$clave]);
            move_uploaded_file($nombre_tmp, $dir_pictures . $nombre);
        }        
        $user->pictures = $dir_nick_picture . "album/";        
        $stmt = $m->insertUser($user);
        echo $stmt;
    }
}
?>
