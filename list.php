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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golf Database</title>
</head>
<body>
    
</body>
</html>
<h1>Golf E- Commerce: Product Database</h1>
<?php
foreach ($golf_gears as $golf_gear) {

    echo '<h2>' . htmlspecialchars($golf_gear['product_name']) . '</h2>';

    echo '<p class="price">Price: $' . htmlspecialchars($golf_gear['product_price']) . '</p>';
    
    echo '<p class="manufacturer">Manufacturer: ' . htmlspecialchars($manufacturer[$golf_gear['manufacturer']]) . '</p>';
   
    echo '<p class="product_description">Product Description: ' . htmlspecialchars($golf_gear['product_description']) . '</p>';
    
    echo '<p class="availability">In Stock? ' . htmlspecialchars($golf_gear['availability']) . '</p>';
   
    echo '<p class="category">Product Category: ' . htmlspecialchars($product_category[$golf_gear['product_category']]) . '</p>';

    echo '<p class="id">ID: <a href="edit.php?id=' . htmlspecialchars($golf_gear['id']) . '">edit</a></p>';
    echo '<hr>';
}