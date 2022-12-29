<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo ObjectManager::getCSS("form.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="form" method="post">
                <h2>Login to Your Account</h2>
                <span class="error"><?= $error ?></span>
                <label class="form-label">Email</label>
                <input class="form-input" type="text" name="email" placeholder="email@email.com" value="<?= $_POST["email"] ?>"/>
                <label class="form-label">Password</label>
                <input class="form-input" type="password" name="password" placeholder="*****" value="<?= $_POST["password"] ?>"/>
                <input class="button" type="submit" name="submit" value="Login" />
                <a style="text-decoration:none; color:#471ca9" href="register">Or Sign Up</a>
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>
