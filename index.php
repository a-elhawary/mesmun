<?php
require_once("Helpers/Router.php");
require_once("Helpers/ObjectManager.php");
require_once("Controllers/UsersController.php");
require_once("Controllers/HomeController.php");
require_once("Controllers/EventsController.php");

// create a router with a base address
$base = "/code/mes_mun";
$router = new Router($base);
ObjectManager::$base = $base;

//define routes
$router->get("/", function(){
	HomeController::home();
});

// Events Routes
$router->get("/events", function(){
	require_once "Views/Pages/events.php";
});

$router->get("/events/create", function(){
	require_once "Views/Pages/create-event.php";
});

$router->post("/events/create", function(){
	EventsController::createEvent();
});

$router->get("/events/{id}", function($args){
	echo "Event ".$args[id];
});

// User Routes
$router->get("/login", function(){
	require_once "Views/Pages/login.php";
});

$router->post("/login", function(){
	UsersController::login($_POST["email"], $_POST["password"]);
});
	

$router->route();
