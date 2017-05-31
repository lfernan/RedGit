<?php

require_once '../../model/managed/Managed.php';
require_once '../../model/entities/Users.php';
require_once '../../core/util.php';
$dir = $_SERVER["DOCUMENT_ROOT"] . '/RedGit/uploads/';
$nick = null;
$album = null;
$video = null;
$id_dir = null;
$nombre = null;

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
    $user->location = $_POST['location'];
    $user->mail = $_POST['mail'];
    $user->published = 1;

    if ($_FILES["nick_picture"]["error"] > 0) {
        echo 'Error ' . $_FILES["file"]["error"] . "<br>";
    } else {
        $id_dir = uniqid() . "/";
        $nick = $dir . $id_dir;
        mkdir($nick);
        $nombre = uniqid() . getExtension($_FILES["nick_picture"]["tmp_name"]);
        move_uploaded_file($_FILES["nick_picture"]["tmp_name"], $nick . $nombre);
        $user->nick = "uploads/" . $id_dir . $nombre;
        mkdir($nick . "video");
        $video = $nick . "video/" . $_FILES["video"]["name"];
        $user->video = "uploads/" . $id_dir . "video/" . $_FILES["video"]["name"];
        move_uploaded_file($_FILES["video"]["tmp_name"], $video);
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
        $idUser = $m->insertUser($user);
        $services = $_POST['services'];
        for ($i = 0; $i < count($services); $i++) {
            echo 'count '.count($services).'<br>';
            echo 'id '.$services[$i].'<br>';
            $m->insertUserService($idUser, $services[$i]);
        }
    }
}
?>
