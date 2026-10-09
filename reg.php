<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Sign up</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="POST" action="/lib/signup.php">
                <div class="inline">
                    <div>
                        <label style="color:darkgray;">Login</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label style="color:darkgray;">Username</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label style="color:darkgray;">Email Address</label>
                <input type="email" name="email" class="one-line">
                <label style="color:darkgray;">Password</label>
                <input type="password" name="password" class="one-line">

                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
