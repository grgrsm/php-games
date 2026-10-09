<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Log In</h2>
            <form method="POST" action="/lib/auth.php">
                <div class="inline">
                    <div>
                        <label style="color:darkgray;">Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label style="color:darkgray;">Password</label>
                        <input type="password" name="password">
                    </div>
                </div>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
