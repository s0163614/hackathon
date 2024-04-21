<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'auto/config.php'; 

try {
    $config = require 'auto/config.php';
    $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']};charset=utf8";
    $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
    
    $stmt = $pdo->query('SELECT u.username, c.cart AS cart, p.price AS price, l.cash_back 
                         FROM loyal l
                         LEFT JOIN cart c ON l.cart = c.id
                         LEFT JOIN price p ON l.price = p.id
                         LEFT JOIN users u ON l.username = u.id
                         ORDER BY l.id DESC LIMIT 1');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $loyalData = array(
        'username'  => isset($row['username']) ? $row['username'] : null,
        'cart'      => isset($row['cart']) ? $row['cart'] : null,
        'price'     => isset($row['price']) ? $row['price'] : null,
        'cash_back' => isset($row['cash_back']) ? $row['cash_back'] : null
    );
} catch (PDOException $e) {
    $loyalData = array('error' => $e->getMessage());
}

header('Content-Type: application/json');
echo json_encode($loyalData);
?>