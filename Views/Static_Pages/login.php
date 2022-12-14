<?php require_once(dirname(__DIR__)."/../Helpers/Router.php") ?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/login.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form class="login" method="post">
                <label class="login-label">Email</label>
                <input class="login-input" type="text" name="email" placeholder="email@email.com"/>
                <label class="login-label">Password</label>
                <input class="login-input" type="password" name="password" placeholder="*****"/>
                <input class="login-button" type="submit" name="submit" value="Login" />
        </form>
    </body>
</html>
