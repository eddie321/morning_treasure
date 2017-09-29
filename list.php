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

    echo '<h2>' . htmlspecialchars($golf_gear['product_name']) . '</h2>';

    echo '<p class="price">Price: ' . htmlspecialchars($golf_gear['product_price']) . '</p>';
    
    echo '<p class="manufacturer">Manufacturer: ' . htmlspecialchars($golf_gear['manufacturer']) . '</p>';
   
    echo '<p class="product_description">Product Description: ' . htmlspecialchars($golf_gear['product_description']) . '</p>';
    
    echo '<p class="availability">In Stock? ' . htmlspecialchars($golf_gear['availability']) . '</p>';
   
    echo '<p class="category">Product Category: ' . htmlspecialchars($golf_gear['product_category']) . '</p>';

    echo '<p class="id">ID: <a href="edit.php?id=' . htmlspecialchars($golf_gear['id']) . '">edit</a></p>';
    echo '<hr>';
}