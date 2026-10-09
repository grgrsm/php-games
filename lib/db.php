<?php
require_once __DIR__ . "/../vendor/autoload.php";
$env = parse_ini_file(__DIR__ . "/../.env");
$dsn = "mysql:host={$env["DB_HOST"]};port={$env["DB_PORT"]};dbname={$env["DB_NAME"]};charset=utf8mb4";

$pdo = new PDO($dsn, $env["DB_USER"], $env["DB_PASS"], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
