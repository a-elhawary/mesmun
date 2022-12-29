    </head>
    <body>
        <nav class="topbar">
            <div class="topbar-top-mobile">
                <img class="topbar-logo" src="<?= ObjectManager::getImage("logo-white.png"); ?>"/>
                <button onclick="toggleBar()" class="topbar-drop-btn">&#9776;</button>
            </div>
            <ul id="hideable" class="topbar-links">
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/">Home</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/">About</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/">Councils</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/">Events</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/">Blog</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/events">Our Board</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/events">Surveys</a>
                </li>
                <li class="topbar-link">
                    <a href="<?= ObjectManager::getBase(); ?>/events">Sponsors</a>
                </li>
                <li class="topbar-link topbar-link--right">
                    <a href="<?= ObjectManager::getBase(); ?>/login">Login</a>
                </li>
            </ul>
        </nav>
