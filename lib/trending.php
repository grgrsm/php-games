<?php
require_once "./lib/db.php";
$sql = "SELECT * FROM trending ORDER BY id LIMIT 4";
$query = $pdo->prepare($sql);
$query->execute();
$games = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($games as $el) {
    echo '
    <div class="block">
        <img src="/img/' .
        $el->image .
        '" alt="">
        <span><img src="/img/fire.svg" alt="">' .
        $el->followers .
        '</span>
    </div>
    ';
}
?>
