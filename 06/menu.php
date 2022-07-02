    <header>
        <h1>Super Slick Course Manager</h1>
        <ul>
            <li><a href="/index.php">Home</li>
            <li><a href="">About</a></li>
            <li><a href="">Sign Up</a></li>
            <?php
            if (isset($_SESSION["userid"])) {
                echo '<li><a href="">Logout</a></li>';
            }
            ?>
        </ul>
    </header>