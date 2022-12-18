<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/login.css" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="login" method="post">
                <label class="login-label">Email</label>
                <input class="login-input" type="text" name="email" placeholder="email@email.com"/>
                <label class="login-label">Password</label>
                <input class="login-input" type="password" name="password" placeholder="*****"/>
                <input class="login-button" type="submit" name="submit" value="Login" />
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>
