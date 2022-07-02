<?php require("./views/page-top.php"); ?>
<?php require("./views/page-menu.php"); ?>

<main>
    <form method="post" action="./function/login.php">
        <fieldset>
            <div class="form-element">
                <h3>Enter your email & password:</h3>
                <!--<?= $error ?>-->
            </div>
            <div class="form-element">
                <label for="password" class="label">
                    <span class="label-text">Email:</span>
                </label>
                <input id="email" type="text" placeholder="email" name="email" />
            </div>
            <div class="form-element">
                <label for="password" class="label">
                    <span class="label-text">Password:</span>
                </label>
                <input id="password" type="password" placeholder="password" name="password" />
            </div>
            <div class="form-element">
                <button type="submit">Log In</button>
            </div>
        </fieldset>
    </form>
</main>
<footer></footer>
</body>

</html>