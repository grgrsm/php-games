<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css?v=1">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero container">
            <div class="hero--info">
                <h2>3D game Dev</h2>
                <h1>Work that we produce for our clients</h1>
                <p>It's exceptional.</p>
                <button class="btn">Get more details</button>
            </div>
            <img src="img/joystick.svg" alt="">
        </div>

        <div class="container trending">
            <a href="/trending.php" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            <div class="games">
                <?php require_once "./lib/trending.php"; ?>
            </div>
        </div>

        <div class="container big-text">
            <p>We are the №1 team in the world.</p>
        </div>

        <div class="container banner">
            <h3>Spidey?</h3>
            <p>He's also here to show you a surprise.</p>
            <img src="/img/spider-man.png" alt="">
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>We have them all.</h3>
            <div class="info">
                <div class="block">
                    <img src="/img/feature1.png" alt="">
                    <p>Mobile Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature2.png" alt="">
                    <p>PC Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature3.png" alt="">
                    <p>PS4 Game Development</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature4.png" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature5.png" alt="">
                    <p>AR/ VR design</p>
                    <img src="/img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="/img/feature6.png" alt="">
                    <p>3D Modelings</p>
                    <img src="/img/arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>We are really proud of them! </p>
            <div class="images">
                <img src="/img/Project1.png" alt="">
                <img src="/img/Project2.png" alt="">
                <img src="/img/Project3.png" alt="">
            </div>
            <div class="images">
                <img src="/img/Project4.png" alt="">
                <img src="/img/Project5.png" alt="">
                <img src="/img/Project6.png" alt="">
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>
