<header class="container">
    <span class="logo">GRIGAMES</span>
    <nav>
        <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about.php">About us</a></li>
            <?php if (isset($_COOKIE["login"])) {
                echo '<li><a href="/user.php">Profile</a></li>';
                echo '<li><a href="./lib/logout.php">Log out</a></li>';
            } else {
                echo '<li><a href="/reg.php">Sign Up</a></li>';
                echo '<li><a href="/auth.php">Log In</a></li>';
            } ?>
            <li class="btn"><a href="/contacts.php">Contacts</a></li>
        </ul>
    </nav>
</header>
