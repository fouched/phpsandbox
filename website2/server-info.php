<?php
/*
 * $_SERVER SUPERGLOBAL
 */
$server = [
    'host server name' => $_SERVER['SERVER_NAME'],
    'software' => $_SERVER['SERVER_SOFTWARE'],
    'protocol' => $_SERVER['SERVER_PROTOCOL'],
    'doc root' => $_SERVER['DOCUMENT_ROOT'],
    'script name' => $_SERVER['PHP_SELF'],
    'current page' => $_SERVER['SCRIPT_NAME'],
    'absolute path' => $_SERVER['SCRIPT_FILENAME']
];

//print_r($server);
//echo('<br><br>');

$client = [
    'client system into' => $_SERVER['HTTP_USER_AGENT'],
    'ip' => $_SERVER['REMOTE_ADDR'],
    'remote port' => $_SERVER['REMOTE_PORT'],

];

//print_r($client);