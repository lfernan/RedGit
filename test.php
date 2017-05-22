<?php
echo $_SERVER["DOCUMENT_ROOT"].'<br>';
$dir = $_SERVER["DOCUMENT_ROOT"] . '/RedGit/uploads/591ca4c74244a/album/';
$files = glob($dir.'*');

foreach ($files as $file) {
    echo 'http://'.$_SERVER["HTTP_HOST"].'/redgit/uploads/591ca4c74244a/album/'.basename($file).'<br>';
}
?>

