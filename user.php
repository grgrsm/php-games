<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Your profile</h2>
            <h2>Hello, <?= $_COOKIE["login"] ?>!</h2>
        </div>
        <form method="POST" action="/lib/add-game.php">
            <div class="inline">
                <div>
                    <label>Game image</label>
                    <input type="text" name="image">
                </div>
                <div>
                    <label>Game Followers</label>
                    <input type="text" name="followers">
                </div>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
