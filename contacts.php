<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="container hero-contacts">
        <h1>We worl world-wide</h1>
        <p>Here are our offices </p>
        <img src="/img/Map.png" alt="">
    </div>

    <div class="feedback">
        <div class="container">
            <h2>Say hello</h2>
            <form method="POST" action="/lib/post-message.php">
                <div class="inline">
                    <div>
                        <label style="color:darkgray;">First Name</label>
                        <input type="text" name="first-name">
                    </div>
                    <div>
                        <label style="color:darkgray;">Last Name</label>
                        <input type="text" name="last-name">
                    </div>
                </div>
                <label style="color:darkgray;">Email Address</label>
                <input type="email" class="one-line" name="email">

                <label style="color:darkgray;">Message</label>
                <textarea class="one-line" name="message"></textarea>
                <button type="submit">Get in touch</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
