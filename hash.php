<?php
header('Content-Type: application/json');



if($_POST){

    $text = $_POST['text'];

    $hashs = [
        'sha512'=> hash('sha512',$text),
        'gost' => hash('gost', $text),
        'md2' => hash('md2', $text)
     ];

    $response = json_encode($hashs);

    echo $response;
}