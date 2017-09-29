<?php
include_once 'db.php';
require_once 'functions.php';
require_once 'availability.php';
require_once 'manufacturers.php';
require_once 'product_category.php';

$db = db_connect();

if (!isset($_GET['id'])) {
    echo 'no id';  // 
    exit;
}


$stmt = $db->prepare('SELECT * FROM golf_gear WHERE id = ?');
$stmt->execute([$_GET['id']]);
$golf_gear = $stmt->fetch();

echo build_form($golf_gear['name'], $golf_gear['product_price'], $golf_gear['manufacturer'], $golf_gear['product_description'], $golf_gear['availability'], $golf_gear['product_category']);