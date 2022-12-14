<?php
require_once("Helpers/Router.php");

// create a router with a base address
$router = Router::getRouter("/code/mes_mun");

//define routes
$router->get("/", function(){
	echo "<h1>home page</h1>";
});

$router->get("/about", function(){
	echo "<h1>about page</h1>";
});

$router->get("/events/{id}", function($args){
	echo "<h1>Event ".$args["id"]."</h1>";
});

$router->get("/login", function(){
	include_once "Views/Pages/login.php";
});

$router->post("/login", function(){
	$email = $_POST["email"];
	$pass = $_POST["password"];

	
});

$router->route();
?>
