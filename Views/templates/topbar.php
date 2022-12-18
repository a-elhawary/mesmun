    </head>
    <body>
        <nav class="topbar">
            <div class="topbar-top-mobile">
                <img class="topbar-logo" src="<?= Router::getRouter("")->getBase()?>/Views/Images/logo-white.png"/>
                <button onclick="toggleBar()" class="topbar-drop-btn">&#9776;</button>
            </div>
            <ul id="hideable" class="topbar-links">
                <li class="topbar-link">
                    <a href="<?= Router::getRouter("")->getBase(); ?>/">Home</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= Router::getRouter("")->getBase(); ?>/events">Events</a>
                </li>
                <li class="topbar-link">
                    <a href="">Contact Us</a>
                </li>
                <li class="topbar-link topbar-link--right">
                    <a href="<?= Router::getRouter("")->getBase(); ?>/login">Login</a>
                </li>
            </ul>
        </nav>