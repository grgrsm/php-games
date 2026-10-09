<?php
$image = trim(filter_var($_POST["image"], FILTER_SANITIZE_SPECIAL_CHARS));
$followers = trim(
    filter_var($_POST["followers"], FILTER_SANITIZE_SPECIAL_CHARS),
);
if (strlen($image) < 2) {
    echo "Image error";
    exit();
}
if ($followers < 2) {
    echo "Followers error";
    exit();
}
// DB
require "db.php";
$sql = "INSERT INTO trending(image, followers) VALUES(?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$image, $followers]);
header("Location: /trending.php");
