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

        <div class="hero-about container">
            <div class="info">
                <h1>We are the №1 team in the world.</h1>
                <p>Wanna see why?</p>
                <button class="btn"><a style="color:#fff;" href="/contacts.php">Get in touch</a></button>
            </div>
            <img src="/img/about-banner.png" alt="">
        </div>

        <div class="container work">
            <h2>Why work with us</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Lorem ipsum</span>
                    <h3>Community</h3>
                    <p>We are gamers ourselves</p>
                </div>
                <div class="block">
                    <span class="badge brown">Fun</span>
                    <h3>Games are fun yeah?</h3>
                    <p>And you can play in our team.</p>
                </div>
                <div class="block">
                    <span class="badge green">High-earning</span>
                    <h3>Just google it!</h3>
                    <p>We're not lying.</p>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>

</body>

</html>
