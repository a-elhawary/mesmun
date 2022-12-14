<?php
    require_once(dirname(__DIR__)."/Models/User.php");

    class UsersController{
        public static function showLoginError($error){
            echo $error;
        }

        public static function login($email, $password){
	        $users = new User();
	        $users = $users->getBy("email", $email);
            // check user exists
	        if(empty($users)){
                showLoginError("Incorrect Email Address");
                return;
	        }
            // check password is correct
            if($users[0]["password"] != $password){
                showLoginError("Incorrect Password");
                return;
            }
            // login user
            setcookie("mesmun_login", $users["id"]);
            Router::getRouter("")->toRoute("/");
        }
    }
?>