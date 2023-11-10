<?php
require_once 'config.php';

// ---- FUNCTIONS ----
function getCode(): ?string
{
    $code = null;
    if( array_key_exists('c', $_GET) )
        $code = $_GET['c'];
    if( array_key_exists('code', $_GET) )
        $code = $_GET['code'];
    return $code;
}

function getDownloadFile($code): ?string
{
    global $file_download_directory;
    $filename = getDownloadFileNameByCode($code);
    if( !is_null($filename) && gettype($filename) == "string" && strlen($filename) > 0){
        if( file_exists($file_download_directory . $filename) )
            return $file_download_directory . $filename;
    }

    return null;
}

function getDownloadFileNameByCode($code): ?string
{
    $config = getConfig();
    foreach ($config as $code_config){
        if (gettype($code_config) === "array" && count($code_config) > 1){
            if ($code_config[0] === $code){
                return $code_config[1];
            }
        }
    }

    return null;
}


function getConfig(): array
{
    global $file_download_codes, $file_csv_separator;
    $config = array();

    # open config csv file
    if (($handle = fopen($file_download_codes, 'r')) !== false){

        # add each line of csv data
        while (($data = fgetcsv($handle, null, $file_csv_separator)) !== false)
            $config[] = $data;

    }

    return $config;
}