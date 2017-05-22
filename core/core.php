<?php

session_start();
date_default_timezone_set('America/Caracas');

#Constantes de la APP
define('JS_PATH', 'http://'.$_SERVER["HTTP_HOST"].'/redgit/js/');
define('CSS_PATH', 'http://'.$_SERVER["HTTP_HOST"].'/redgit/css/');
define('IMG_PATH', 'http://'.$_SERVER["HTTP_HOST"].'/redgit/images/');
define('HTTP_PATH', 'http://'.$_SERVER["HTTP_HOST"].'/redgit/');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"].'/RedGit/');
define('APP_TITLE', 'Red');
define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' Red Software.');
define('APP_URL', 'http://localhost/Red/');

require_once 'model/db/DBFacade.php';
require_once 'model/managed/Managed.php';
require_once 'util.php';

if (dispositivo() == 'mobile') {
    define('MOBILE', true);
    define('DESKTOP', false);
} else if (dispositivo() == 'desktop') {
    define('DESKTOP', true);
    define('MOBILE', false);
}
?>
