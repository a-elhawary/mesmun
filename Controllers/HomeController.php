<?php
class HomeController{
    public static function home(){
        if(isset($_COOKIE["mesmun_login"])){
            echo "<h1> Logged In with ID ".$_COOKIE["mesmun_login"];
            return;
        }
        require_once __DIR__."/../Views/Pages/home.php";
    }
}
?>