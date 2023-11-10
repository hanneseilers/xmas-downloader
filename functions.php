<?php
require_once 'config.php';

// ---- FUNCTIONS ----
function getCode(){
    $code = null;
    if( array_key_exists('c', $_GET) )
        $code = $_GET['c'];
    if( array_key_exists('code', $_GET) )
        $code = $_GET['code'];
    return $code;
}

function getDownloadFile($code){
    global $file_download_directory, $file_name_pattern;
    if( strlen($code) == 6 ){
        $filename = $file_download_directory . str_replace("<CODE>", $code, $file_name_pattern);
        if( file_exists($filename) ) return $filename;
    }

    return null;
}