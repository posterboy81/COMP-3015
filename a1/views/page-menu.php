<header>
    <h1>Super Slick Course Manager</h1>
    <ul>
        <li><a href="/">Home</li>
        <li><a href="/">About</a></li>
        <li><a href="/">Sign Up</a></li>
        <?php
        if (isset($_SESSION)) {
            echo '<li><a href="../function/logout.php">Logout</a></li>';
        }
        ?>
    </ul>
</header>