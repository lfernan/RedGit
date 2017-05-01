<?php

if ($_POST) {

    include_once 'core/core.php';
    include_once 'core/header.php';

    switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
        case 'data':
            //require('view/forms/data.php');
            echo 'se hizo el POST y se detecto el data';
            break;
        default:
            echo 'se hizo el POST y NO se detecto el data';
            //header('location: index.php');
            break;
    }
    include_once 'core/footer.php';
} else {
    echo 'no se hizo el POST';
    //header('location: index.php');
}
?>