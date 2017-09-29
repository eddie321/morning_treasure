<?php

require_once 'db.php';
require_once 'manufacturers.php';
require_once 'product_category.php';
$db = db_connect();


$stmt = $db->prepare('SELECT * FROM golf_gear');
$stmt->execute();
$movies = $stmt->fetchALL();

// var_dump($movies);



foreach ($movies as $movie) {
    echo htmlspecialchars($movie['name']);
    echo('<br>');
    echo htmlspecialchars($movie['description']);
    echo('<br>');
    echo htmlspecialchars($movie['director']);
    echo('<br>');
    echo '<strong>Genre:';
    echo htmlspecialchars($genres[$movie['genre']]);
    echo '</strong>';
    echo('<br>');
    echo '<a href="edit.php?id=' . htmlspecialchars($movie['id']) . '">edit</a>';
    echo '<hr>';

}