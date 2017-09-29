<?php

require_once 'db.php';
require_once 'manufacturers.php';
require_once 'product_category.php';
$db = db_connect();


$stmt = $db->prepare('SELECT * FROM golf_gear');
$stmt->execute();
$movies = $stmt->fetchALL();

// var_dump($movies);



foreach ($golf_gears as $golf_gear) {
    echo htmlspecialchars($golf_gear['name']);
    echo('<br>');
    echo htmlspecialchars($golf_gear['description']);
    echo('<br>');
    echo htmlspecialchars($golf_gear['price']);
    echo('<br>');
    echo '<strong>Product Category:';
    echo htmlspecialchars($golf_gears[$golf_gear['product_category']]);
    echo '</strong>';
    echo('<br>');
    echo '<strong>Manufacturer:';
    echo htmlspecialchars($golf_gears[$golf_gear['manufacturer']]);
    echo '</strong>';
    echo('<br>');
    echo '<a href="edit.php?id=' . htmlspecialchars($golf_gear['id']) . '">edit</a>';
    echo '<hr>';
}