<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo ObjectManager::getCSS("form.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="form" method="post">
                <label class="form-label">Email</label>
                <input class="form-input" type="text" name="email" placeholder="email@email.com"/>
                <label class="form-label">Password</label>
                <input class="form-input" type="password" name="password" placeholder="*****"/>
                <input class="form-button" type="submit" name="submit" value="Login" />
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>
