<?php

session_start();
date_default_timezone_set('America/Caracas');

#Constantes de la APP
define('HTML_DIR', 'html/');
define('APP_TITLE', 'Red');
define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' Red Software.');
define('APP_URL', 'http://localhost/Red/');

//require_once 'model/db/DBFacade.php';
//require_once 'model/managed/HoldManager.php';
require_once 'util.php';

if (dispositivo() == 'mobile') {
    define('MOBILE', true);
    define('DESKTOP', false);
} else if (dispositivo() == 'desktop') {
    define('DESKTOP', true);
    define('MOBILE', false);
}
?>
