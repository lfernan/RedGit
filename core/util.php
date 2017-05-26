<?php

function encrypt($string) {
    $long = strlen($string);
    $str = '';
    for ($x = 0; $x < $long; $x++) {
        $str .= ($x % 2) != 0 ? md5($string[$x]) : $x;
    }
    return md5($str);
}

function toPNG($img) {
    $newpng = null;
    $png = null;
    if (exif_imagetype($img) == IMAGETYPE_GIF) {
        $newpng = uniqid().'.png';
        $png = imagepng(imagecreatefromgif($_FILES['image']['tmp_name']), $newpng);
    } elseif (exif_imagetype($_FILES['image']['tmp_name']) == IMAGETYPE_JPEG) {
        $newpng = uniqid().'.png';
        $png = imagepng(imagecreatefromjpeg($_FILES['image']['tmp_name']), $newpng);
    } else {
        $newpng = uniqid().'.png';
        $png = imagepng($_FILES['image']['tmp_name'], $newpng);
    }
    return $png;
}

function getExtension($img){
    if (exif_imagetype($img) ==  IMAGETYPE_GIF) {        
        return ".gif";
    } elseif (exif_imagetype($img) == IMAGETYPE_JPEG) {
        return ".jpeg";
    } elseif (exif_imagetype($img) == IMAGETYPE_PNG) {
        return ".png";
    }
    return null;
}

function dispositivo() {
    $tablet_browser = 0;
    $mobile_browser = 0;
    $body_class = 'desktop';

    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $tablet_browser++;
        $body_class = "tablet";
    }

    if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $mobile_browser++;
        $body_class = "mobile";
    }

    if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ( (isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
        $mobile_browser++;
        $body_class = "mobile";
    }

    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
    $mobile_agents = array(
        'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
        'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
        'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
        'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
        'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
        'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
        'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
        'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
        'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');

    if (in_array($mobile_ua, $mobile_agents)) {
        $mobile_browser++;
    }

    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
        $mobile_browser++;
        //Check for tablets on opera mini alternative headers
        $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
        if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
            $tablet_browser++;
        }
    }
    if ($tablet_browser > 0) {
        return 'mobile';
    } else if ($mobile_browser > 0) {
        return 'mobile';
    } else {
        return 'desktop';
    }
}

?>
