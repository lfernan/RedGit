<?php

include_once 'core/core.php';
if ($_POST) {
    switch (isset($_POST['mode']) ? $_POST['mode'] : null) {
        case 1:
            include('view/gallery.php');
            break;
        default:
            header('location: index.php');
            break;
    }
}
?>