<?php require_once(__DIR__."/../templates/head.php"); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Router::getRouter(null)->getBase(); ?>/Views/Styles/home.css" />
        <title>Home | MESMUN</title>
<?php require_once(__DIR__."/../templates/topbar.php"); ?>
        <div class="landing">
           <div class="landing-text">
                <div class="landing-title">MESMUN</div>
                <div class="landing-subtitle">Embrace The Change</div>
            </div> 
            <div class="landing-cta">
                <div class="landing-cta-txt">Start Your Journey Today</div>
                <button class="landing-cta-btn">Register Now</button>
            </div>
        </div>
<?php require_once(__DIR__."/../templates/footer.php"); ?>