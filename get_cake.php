<?php
header('Content-Type: application/json');
require 'db.php';

$id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT * FROM cakes WHERE id = ?");
$stmt->execute([$id]);
$cake = $stmt->fetch();

echo json_encode($cake);
