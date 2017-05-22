<?php

echo $_POST['name'] . '<br>';
echo $_POST['phone'] . '<br>';
echo $_POST['description'] . '<br>';
echo $_POST['age'] . '<br>';
echo $_POST['measures'] . '<br>';
echo $_POST['schedules'] . '<br>';
$services = $_POST['services'];
for ($i = 0; $i < count($services); $i++) {
    echo $services[$i] . '<br>';
}
echo $_POST['publish'] . '<br>';
echo $_POST['price'] . '<br>';

require_once '../../model/managed/Managed.php';
require_once '../../model/entities/Users.php';
$dir = $_SERVER["DOCUMENT_ROOT"] . '/RedGit/uploads/';
$dir_nick_picture = null;
$dir_pictures = null;
$id_dir = null;

if (isset($_FILES["nick_picture"])) {
    $m = new Managed();
    $user = new Users();
    $user->name = $_POST['name'];
    $user->public_phone = $_POST['phone'];
    $user->description = $_POST['description'];
    $user->age = $_POST['age'];
    $user->measures = $_POST['measures'];
    $user->schedules = $_POST['schedules'];
    $user->price = $_POST['price'];
    $user->published = 1;

    if ($_FILES["nick_picture"]["error"] > 0) {
        echo 'Error ' . $_FILES["file"]["error"] . "<br>";
    } else {
        $id_dir = uniqid() . "/";
        $dir_nick_picture = $dir . $id_dir;
        mkdir($dir_nick_picture);
        $user->nick_picture = "uploads/" . $id_dir . $_FILES["nick_picture"]["name"];
        move_uploaded_file($_FILES["nick_picture"]["tmp_name"], $dir_nick_picture . $_FILES["nick_picture"]["name"]);
    }

    if ($_FILES['pictures']['size'] > 0) {
        $dir_pictures = $dir_nick_picture . "album/";
        mkdir($dir_pictures);
        foreach ($_FILES['pictures']['error'] as $clave => $error) {
            $nombre_tmp = $_FILES["pictures"]["tmp_name"][$clave];
            $nombre = basename($_FILES["pictures"]["name"][$clave]);
            move_uploaded_file($nombre_tmp, $dir_pictures . $nombre);
        }
        $user->pictures = "uploads/" . $id_dir . "album/";
        $idUser = $m->insertUser($user);
        for ($i = 0; $i < count($services); $i++) {            
            $m->insertUserService($idUser, $services[$i]);
        }
    }
    
    echo 'PRICE-'.$user->price;
}
?>
