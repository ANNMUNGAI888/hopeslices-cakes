<?php
header('Content-Type: application/json');
require 'db.php';
$stmt = $pdo->query("SELECT id,name,description,price,image FROM cakes ORDER BY created_at DESC");
$cakes = $stmt->fetchAll();
echo json_encode($cakes);
