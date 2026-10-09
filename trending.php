<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>


        <div class="container trending">
            <h3>Currently Trending Games</h3>

            <div class="games" style="flex-wrap: wrap; gap: 10px; margin-bottom:20px">
                <?php require_once "./lib/trending_all.php"; ?>
            </div>
        </div>
    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
