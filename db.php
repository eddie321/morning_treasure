<?php

function db_connect()
{
    include_once 'config.php';
    $db = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8",  $db_user,$db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//enabling errors just for our case
    return $db;
}

?>
