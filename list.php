<?php

include_once 'db.php';
require_once 'functions.php';
require_once 'availability.php';
require_once 'manufacturers.php';
require_once 'product_category.php';
$db = db_connect();


$stmt = $db->prepare('SELECT * FROM golf_gear');
$stmt->execute();
$golf_gears = $stmt->fetchALL();







foreach ($golf_gears as $golf_gear) {
    var_dump($golf_gear);
    echo htmlspecialchars($golf_gear['product_name']);
    echo('<br>');
    echo htmlspecialchars($golf_gear['product_price']);
    echo('<br>');
    echo '<strong>Manufacturer:';
    echo htmlspecialchars($golf_gears[$golf_gear['manufacturer']]);
    echo '</strong>';
    echo('<br>');
    echo htmlspecialchars($golf_gear['product_description']);
    echo('<br>');
    echo htmlspecialchars($golf_gear['availability']);
    echo('<br>');
    echo '<strong>Product Category:';
    echo htmlspecialchars($golf_gears[$golf_gear['product_category']]);
    echo '</strong>';
    echo('<br>');
    echo '<a href="edit.php?id=' . htmlspecialchars($golf_gear['id']) . '">edit</a>';
    echo '<hr>';
}

