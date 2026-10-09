<?php

require "db.php";
$id = (int) $_POST["id"];

$sql = "DELETE FROM trending WHERE id = :id";
$query = $pdo->prepare($sql);

$query->execute(["id" => $id]);

header("Location: /admin.php");
exit();
?>
