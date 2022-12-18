<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo ObjectManager::getCSS("form.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="form" method="post">
                <div class="form-title">Create Event</div>
                <div class="error"><?= $error ?></div>
                <label class="form-label">Name</label>
                <input class="form-input" type="text" name="name" placeholder="Name the Event..." value="<?= $_POST["name"]; ?>"/>
                <label class="form-label">Description</label>
                <textarea class="form-input" name="description" placeholder="Describe the event..." value="<?= $_POST["description"]; ?>"></textarea>
                <label class="form-label">Image</label>
                <input class="form-input--file" type="file" name="img" />
                <label class="form-label">Event Date</label>
                <input class="form-input" type="date" name="date" value="<?= $_POST["date"] ?>"/>
                <input class="form-button" type="submit" name="submit" value="Create Event" />
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>