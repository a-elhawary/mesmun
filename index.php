<?php
require_once("Helpers/Router.php");
require_once("Helpers/ObjectManager.php");
require_once("Models/User.php");
require_once("Controllers/UsersController.php");
require_once("Controllers/HomeController.php");
require_once("Controllers/EventsController.php");
require_once("Controllers/BlogController.php");

// create a router with a base address
$base = "/code/mes_mun";
$router = new Router($base);
ObjectManager::$base = $base;

// Auth MiddleWare
$adminLevel = ["/events/create", "/blog/create", "/users"];
$router->middleware($adminLevel, function(){
	if(empty($_COOKIE["mesmun_login"])){
		http_response_code(401);
		echo "<h1>UnAuthenticated</h1>";
		die();
	}
	$user = new User();
	$arr = $user->getBy("id", $_COOKIE["mesmun_login"]);
	if($arr[0]["role"] < 2){
		http_response_code(403);
		echo "<h1>UnAuthorized</h1>";
		die();
	}
});

// Static Routes
$router->get("/", function(){
	HomeController::home();
});

// Events Routes
$router->get("/events", function(){
	EventsController::getEvents();
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

// Blog Routes
$router->get("/blog", function(){
	BlogController::getBlog();
});

$router->get("/blog/create", function(){
	require_once "Views/Pages/create-blog.php";
});

$router->post("/blog/create", function(){
	BlogController::createBlogPost();
});

$router->get("/blog/{id}", function($args){
	echo "Blog ".$args[id];
});

//
// User Routes
$router->get("/login", function(){
	if($_COOKIE["mesmun_login"]){
		header("Location: ".ObjectManager::getBase());
		die();
	}
	require_once "Views/Pages/login.php";
});


$router->post("/login", function(){
	UsersController::login($_POST["email"], $_POST["password"]);
});

$router->get("/register", function(){
	require_once "Views/Pages/register.php";
});

$router->post("/register", function(){
	UsersController::register();
});

$router->get("/users", function(){
	UsersController::getUsers();
});
	

$router->route();
