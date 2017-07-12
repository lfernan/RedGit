<?php

session_destroy();

unset($_SESSION['usuario']);
header('location: index.php');
?>
