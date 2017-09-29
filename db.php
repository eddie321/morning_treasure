<?php
function db_connect()
{
$db = new PDO('mysql:host=localhost;dbname=golf_gear;charset=utf8', 'root','Mundiwa1995');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//enabling errors just for our case
return $db;
}
