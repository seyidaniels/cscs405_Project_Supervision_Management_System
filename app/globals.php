<?php 
function dd ($data) {
    var_dump($data);
    die();
}

function redirect($address) {
    header("Location: ".$address);
}

function session_set($data) {
    $_SESSION[array_keys($data)] = array_values($data);
}

function back () {
   return $_SERVER['HTTP_REFERER'];
}

function root () {
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . 'csc405/public/';

}

function error_404($data) {
    echo $data;
    die();
}