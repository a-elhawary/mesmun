<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | Events</title>
        <link rel="stylesheet" type="text/css" href="<?= ObjectManager::getCSS("general.css"); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= ObjectManager::getCSS("events.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <div class="main">
                <h1>Our Events</h1>
                <?php foreach($events as $event){ ?> 
                        <div class="card">
                                <h2 class="event-title"><?= $event["name"] ?></h2>
                                <div class="event-date"><?= $event["date"] ?></div>
                                <div style="text-align:center;">
                                        <img class="event-img" src="<?= ObjectManager::getUpload("Events/".$event["img"]); ?>" />
                                </div>
                                <div class="event-links">
                                        <a class="button--inverse">See More</a>
                                        <a class="button--transparent">Register Now</a>
                                </div>
                        </div>
                <?php } ?>
        </div>
<?php require_once(__DIR__."/../templates/footer.php"); ?>