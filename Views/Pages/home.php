<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Home | MESMUN</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/fonts.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/topbar.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/home.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class="topbar">
            <div class="topbar-top-mobile">
                <img class="topbar-logo" src="<?= Router::getRouter("")->getBase()?>/Views/Images/logo-white.png"/>
                <button onclick="toggleBar()" class="topbar-drop-btn">&#9776;</button>
            </div>
            <ul id="hideable" class="topbar-links">
                <li class="topbar-link">
                    <a href="">Home</a>
                </li>
                <li class="topbar-link">
                    <a href="">About</a>
                </li>
                <li class="topbar-link">
                    <a href="">Contact Us</a>
                </li>
                <li class="topbar-link topbar-link--right">
                    <a href="">Login</a>
                </li>
            </ul>
        </nav>
        <div class="landing">
            
        </div>
        <script src="<?= Router::getRouter("")->getBase(); ?>/Views/Scripts/topbar.js"></script>
    </body>
</html>