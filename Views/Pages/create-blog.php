<?php require_once(__DIR__."/../templates/head.php"); ?>
        <title>MESMUN | login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo ObjectManager::getCSS("form.css"); ?>" />
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <form class="form" method="post" enctype="multipart/form-data">
                <div class="form-title">Create Blog Post</div>
                <div class="error"><?= $error ?></div>
                <div class="success"><?= $success ?></div>
                <label class="form-label">Title</label>
                <input class="form-input" type="text" name="title" placeholder="Name the Event..." value="<?= $_POST["title"]; ?>"/>
                <label class="form-label">Content</label>
                <textarea class="form-input" name="content" placeholder="Cool Blog Content..."><?= $_POST["content"]; ?></textarea>
                <label class="form-label">Image</label>
                <input class="form-input--file" type="file" name="img" />
                <input class="button" type="submit" name="submit" value="Create Blog Post" />
        </form>
<?php require_once(__DIR__."/../templates/footer.php"); ?>
