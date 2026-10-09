<?php
require "db.php";
$id = (int) $_POST["id"];
$image = trim($_POST["img"]);
$sql = "UPDATE trending SET image = :image WHERE id = :id";
$query = $pdo->prepare($sql);
$query->execute(["image" => $image, "id" => $id]);
header("Location: /admin.php");
exit();
?>
