<?php
// api/db.php
$host = '127.0.0.1';
$db   = 'cakeshop';
$user = 'root';
$pass = ''; // XAMPP default; change if you set a password
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC ];
try{ $pdo = new PDO($dsn,$user,$pass,$options); } catch(Exception $e){ http_response_code(500); echo json_encode(['error'=>'DB connect']); exit; }
