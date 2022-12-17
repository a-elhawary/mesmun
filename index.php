<?php
require_once("Helpers/Router.php");
require_once("Controllers/UsersController.php");
require_once("Controllers/HomeController.php");

// create a router with a base address
$router = Router::getRouter("/code/mes_mun");

//define routes
$router->get("/", function(){
	HomeController::home();
});

$router->get("/about", function(){
	echo "<h1>about page</h1>";
});

$router->get("/events/{id}", function($args){
	echo "<h1>Event ".$args["id"]."</h1>";
});

$router->get("/login", function(){
	require_once "Views/Pages/login.php";
});

$router->post("/login", function(){
	UsersController::login($_POST["email"], $_POST["password"]);
});
	

$router->route();
?>
