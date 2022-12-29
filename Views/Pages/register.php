<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo ObjectManager::getCSS("form.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="form" method="post">
                <h2>Create an Account</h2>
                <span class="error"><?= $error ?></span>
                <label class="form-label">First Name</label>
                <input class="form-input" type="text" name="first_name" placeholder="John" value="<?= $_POST["first_name"]?>"/>
                <label class="form-label">Last Name</label>
                <input class="form-input" type="text" name="last_name" placeholder="Doe" value="<?= $_POST["last_name"]?>"/>
                <label class="form-label">Phone Number</label>
                <input class="form-input" type="text" name="phone_number" placeholder="Doe" value="<?= $_POST["phone_number"]?>"/>
                <label class="form-label">Email</label>
                <input class="form-input" type="text" name="email" placeholder="email@email.com" value="<?= $_POST["email"]?>"/>
                <label class="form-label">Password</label>
                <input class="form-input" type="password" name="password" placeholder="*****" value="<?= $_POST["password"]?>"/>
                <label class="form-label">Confirm Password</label>
                <input class="form-input" type="password" name="confirm-password" placeholder="*****" value="<?= $_POST["confirm-password"]?>"/>
                <input class="button" type="submit" name="submit" value="Sign Up" />
                <a style="text-decoration:none; color:#471ca9" href="login">Or Login</a>
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>
