<?php

include_once 'core/core.php';
include_once 'core/header.php';

if (isset($_GET['view'])) {
    if (file_exists('view/forms/' . strtolower($_GET['view']) . '.php')) {
        include('view/forms/' . strtolower($_GET['view']) . '.php');
    } else {
        include('view/error.php');
    }
} else {
    if (MOBILE) {
        include_once 'view/mobile/MobileContent.php';
    } else if (DESKTOP) {
        include_once 'view/desktop/DesktopContent.php';
    }
}

include_once 'core/footer.php';
?>

