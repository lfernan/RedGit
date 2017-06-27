<?php
/*    $r = array();
    array_push($r,$_POST['name']);
    array_push($r,$_POST['phone']);
    array_push($r,$_POST['description']);
    array_push($r,$_POST['age']);
    array_push($r,$_POST['measures']);
    array_push($r,$_POST['schedules']);
    array_push($r,$_POST['price']);
    array_push($r,$_POST['location']);
    array_push($r,$_POST['mail']);
    echo json_encode($r);*/
    $r = null;
    $r = $r . 'name:'. $_POST['name'] .' ';
    $r = $r . 'phone:'.$_POST['phone'] .' ';
    $r = $r . 'description:'.$_POST['description'] .' ';
    $r = $r . 'age:'.$_POST['age'] .' ';
    $r = $r . 'measures:'.$_POST['measures'] .' ';
    $r = $r . 'schedules:'.$_POST['schedules'] .' ';
    $r = $r . 'price:'.$_POST['price'] .' ';
    $r = $r . 'location:'.$_POST['location'] .' ';
    $r = $r . 'mail:'.$_POST['mail'] .' ';
    echo $r;
?>
