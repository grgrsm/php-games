<?php
require_once "./lib/db.php";
$sql = "SELECT * FROM trending ORDER BY id";
$query = $pdo->prepare($sql);
$query->execute();
$games = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($games as $el) {
    echo '
    <div class="block" style="width: 100%;
    max-width: 250px;">
        <img style="height: 100%; max-height:275px;" src="/img/' .
        $el->image .
        '" alt="">
        <span><img src="/img/fire.svg" alt="">' .
        $el->followers .
        '</span>
    </div>
    ';
}
?>
