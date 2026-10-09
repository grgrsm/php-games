<?php
$firstname = trim(
    filter_var($_POST["first-name"], FILTER_SANITIZE_SPECIAL_CHARS),
);
$lastname = trim(
    filter_var($_POST["last-name"], FILTER_SANITIZE_SPECIAL_CHARS),
);
$messageremail = trim(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
$message = trim(filter_var($_POST["message"], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($firstname) < 2 || strlen($lastname) < 2) {
    echo "Name error";
    exit();
}
if (strlen($messageremail) < 2 && str_contains($messageremail, "@")) {
    echo "Email error";
    exit();
}

require "db.php";
$sql =
    "INSERT INTO messages(`first-name`, `last-name`, `email`, `message`) VALUES(?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$firstname, $lastname, $messageremail, $message]);
header("Location: /index.php");
